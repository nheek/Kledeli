<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/js_functions.php';

$userID = getCookie('userID');
if ($userID) {
    $userDetails = getUserDetailsByID($userID);
}
$pickupLocs = getPickupLocs('Bergen');
?>

<!DOCTYPE html>
<html lang="nb">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <link href="../output.css" rel="stylesheet">
    <title>Hentested - Kledeli</title>
</head>

<body class="w-full">

    <section class="main !block md:!flex">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/sidebar.php'; ?>

        <section class="right-section !w-[95%] mx-auto">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

            <section class="body-section">
                <div class="delivery-cont">
                    <div class="flex w-[90%] md:w-1/2 h-8 justify-center items-center mx-auto mt-6 md:mt-0 gap-2 md:gap-10">
                        <label for="delivery">Velg hentested:</label>
                        <select class="border-0 bg-gray-100 dark:bg-gray-800 p-1 rounded-md" id="delivery">
                            <option value="option1">Bergen</option>
                            <option value="option2">Førde og Haugesund</option>
                        </select>
                    </div>

                    <div class="md:flex flex-wrap gap-10 justify-center md:h-[80vh] overflow-none md:overflow-y-scroll mt-6 md:mt-10 mb-5">

                        <?php
                        if ($pickupLocs) {
                            while ($result = $pickupLocs->fetch_assoc()) {
                                if ($userDetails['pickup_loc_id'] == $result['id']) {
                        ?>
                                    <div class="bg-gray-100 dark:bg-gray-800 h-100 w-full md:w-2/5 mb-4 md:mb-0 p-4 rounded-xl" id="delivery-item-cont-chosen" data-item-id="<?php echo $result['id'] ?>" style="border: 2px solid #454545;">
                                        <div class="delivery-map">
                                            <?php echo $result['map'] ?>
                                        </div>
                                        <div class="delivery-name">
                                            <?php echo $result['name'] ?>
                                        </div>
                                        <div class="delivery-address">
                                            <?php echo $result['address'] ?> - <button class="delivery-read-more" onclick="showDeliveryDetails('delivery-<?php echo $result['id'] ?>')">Les
                                                mer...</button>
                                        </div>
                                        <div class="delivery-desc" id="delivery-<?php echo $result['id'] ?>">
                                            <?php echo $result['description'] ?>
                                        </div>
                                        <button id="delivery-btn-chosen" class="h-10 w-11/12 mx-auto mt-2 relative left-1/2 transform -translate-x-1/2 border-0 bg-white dark:bg-gray-600 rounded-lg text-base px-4 hover:invert" style="filter: invert(1);">Valgt</button>
                                    </div>

                                <?php } else { ?>
                                    <div class="bg-gray-100 dark:bg-gray-800 h-100 w-full md:w-2/5 mb-4 md:mb-0 p-4 rounded-xl" id="delivery-item-cont-<?php echo $result['id'] ?>" data-item-id="<?php echo $result['id'] ?>">
                                        <div class="delivery-map">
                                            <?php echo $result['map'] ?>
                                        </div>
                                        <div class="delivery-name">
                                            <?php echo $result['name'] ?>
                                        </div>
                                        <div class="delivery-address">
                                            <?php echo $result['address'] ?> - <button class="delivery-read-more" onclick="showDeliveryDetails('delivery-<?php echo $result['id'] ?>')">Les
                                                mer...</button>
                                        </div>
                                        <div class="delivery-desc" id="delivery-<?php echo $result['id'] ?>">
                                            <?php echo $result['description'] ?>
                                        </div>
                                        <button id="<?php echo $result['id'] ?>" class="h-10 w-11/12 mx-auto mt-2 relative left-1/2 transform -translate-x-1/2 border-0 bg-white dark:bg-gray-900 rounded-lg text-base px-4 hover:invert" onclick="changeUserPickupLoc(this.id);">Velg</button>
                                    </div>
                        <?php }
                            }
                        } ?>

                    </div>
                </div>
            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>

</html>

<script>
    const userID = parseInt('<?php echo $userID ?>');

    function showDeliveryDetails(elementID) {
        let element = document.getElementById(elementID);

        if (element.style.display == "none" || element.style.display == "") {
            element.style.display = "block";
        } else {
            element.style.display = "none";
        }
    }

    function changeUserPickupLoc(pickup_loc_ID) {
        if (!userID) {
            return false;
        }

        let element = document.getElementById(`delivery-item-cont-${pickup_loc_ID}`);
        let element_btn = document.getElementById(pickup_loc_ID);
        let element_chosen = document.getElementById('delivery-item-cont-chosen');
        let btn_chosen = document.getElementById('delivery-btn-chosen');

        $.ajax({
            url: '../xhr/pickup-loc.php?f=pickup-loc&s=change-user-pickup-loc',
            type: 'POST',
            data: {
                userID: userID,
                pickup_loc_ID: pickup_loc_ID
            },
            success: function(data) {
                if (data) {
                    // unset all styles first
                    let element_chosen_data_id = element_chosen.getAttribute('data-item-id');
                    element_chosen.style = 'border: unset';
                    btn_chosen.style = 'filter: unset';
                    btn_chosen.innerHTML = 'Velg';
                    // then set their id back to their originals
                    element_chosen.setAttribute('id', `delivery-item-cont-${element_chosen_data_id}`);
                    btn_chosen.setAttribute('id', element_chosen_data_id);
                    btn_chosen.setAttribute('onclick', 'changeUserPickupLoc(this.id)');
                    // element_chosen_btn.remove();

                    // set styles first
                    element.style = 'border: 2px solid #454545;';
                    element_btn.style = 'filter: invert(1);';
                    element_btn.innerHTML = 'Valgt';
                    // then set attributes
                    element.setAttribute('id', 'delivery-item-cont-chosen');
                    element_btn.setAttribute('id', 'delivery-btn-chosen');
                }
            }
        });
    }
</script>

<style>
    /* delivery header part */

    /* .delivery-header-cont {
        display: flex;
        /* flex-flow: column; 
    width: 50%;
    height: 8%;
    /* background: black; 
    justify-content: center;
    align-items: center;
    margin: auto;
    gap: 10px;
    }

    */
    /* select#delivery {
        border: 0;
        background: #f1f1f1;
        padding: 5px;
        border-radius: 4px;
    } */

    /* delivery body part */
    /* .delivery-body-cont {
        display: flex;
        flex-wrap: wrap;
        gap: 5%;
        height: 80vh;
        /* background: black; 
    overflow: scroll;
    margin-bottom: 30px;
    }

    */
    /* delivery item part */
    /* .delivery-item-cont {
        background: #F1F1F1;
        height: 325px;
        padding: 20px;
        border-radius: 12px;
        width: 40%;
    } */

    .delivery-name {
        font-size: 21px;
        font-weight: 600;
        margin: 10px 0px 5px 0px;
    }

    .delivery-address {
        opacity: 0.7;
    }

    button.delivery-read-more {
        cursor: pointer;
        text-decoration: underline;
        border: 0;
    }

    .delivery-desc {
        display: none;
        opacity: 0.7;
    }

    button.delivery-button {
        height: 40px;
        width: 90%;
        margin: 10px 0px 0px 0px;
        position: relative;
        left: 50%;
        transform: translateX(-50%);
        border: none;
        background: #fff;
        border-radius: 8px;
        font-size: 15px;
    }
</style>