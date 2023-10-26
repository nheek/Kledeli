<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/shareme/includes/functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/shareme/includes/js_functions.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/kledelii/style.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/kledelii/uploads/favicon.ico">
    <title>Hentested - Kledeli</title>
</head>

<body>

    <section class="main">
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/kledelii/includes/sidebar.php'; ?>

        <section class="right-section">
            <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/kledelii/includes/header.php'; ?>

            <section class="body-section">
                <div class="delivery-cont">
                    <div class="delivery-header-cont">
                        <label for="delivery">Velg hentested:</label>
                        <select id="delivery">
                            <option value="option1">Bergen</option>
                            <option value="option2">Førde og Haugesund</option>
                        </select>
                    </div>

                    <div class="delivery-body-cont">

                        <table>
                            <tr>
                                <th>Kart</th>
                                <th>Butikk</th>
                                <th>Addresse</th>
                                <th>Beskrivelse</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63110.52442910068!2d5.334259003451742!3d60.3757917105875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463cf94ebb546bff%3A0xd2f3ceea1dba624b!2sPakkeboks%20KIWI%20B%C3%B8hmergaten!5e0!3m2!1sen!2sno!4v1695299082733!5m2!1sen!2sno"
                                        width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </td>
                                <td>Pakkeboks Kiwi Bøhmergaten</td>
                                <td>Bøhmergaten 44, 5057 Bergen</td>
                                <td>Pakkeboksen står plassert bak på høyresiden av
                                    bygget.</td>
                                <button class="delivery-button">Velg</button>
                                <td></td>
                            </tr>
                        </table>

                        <div class="delivery-body-item">
                            <div class="delivery-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63110.52442910068!2d5.334259003451742!3d60.3757917105875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463cf94ebb546bff%3A0xd2f3ceea1dba624b!2sPakkeboks%20KIWI%20B%C3%B8hmergaten!5e0!3m2!1sen!2sno!4v1695299082733!5m2!1sen!2sno"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="delivery-details">
                                <h1 class="delivery-details-title"><strong>Pakkeboks Kiwi Bøhmergaten</strong></h1>

                                <p class="delivery-details-address"><strong>Bøhmergaten 44, 5057 Bergen</strong></p>

                                <div class="delivery-details-button-cont">
                                    <p class="delivery-details-tips">Pakkeboksen står plassert bak på høyresiden av
                                        bygget.
                                    </p>
                                    <button class="delivery-button">Velg</button>
                                </div>
                            </div>

                        </div>

                        <div class="delivery-body-item">
                            <div class="delivery-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1044.444869510047!2d5.344927596095116!3d60.30958660195474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463cf9c0e3f693a9%3A0x4a3714ab837cb68d!2sREMA%201000%20SKJOLD!5e0!3m2!1sen!2sno!4v1695296628911!5m2!1sen!2sno"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="delivery-details">
                                <h1 class="delivery-details-title"><strong>Pakkeautomat Fanavegen</strong></h1>

                                <p class="delivery-details-address"><strong>Fanavegen 83, 5239 Rådal</strong></p>

                                <div class="delivery-details-button-cont">
                                    <p class="delivery-details-tips">Pakkeboksen står plassert foran Rema 1000
                                    </p>

                                    <button class="delivery-button">Velg</button>
                                </div>

                            </div>
                        </div>

                        <div class="delivery-body-item">
                            <div class="delivery-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.3375149655462!2d5.330654277182518!3d60.39010307514533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463cff0381f9a6b1%3A0x45a24c210e74dbcc!2sPakkeboks%20Bergen%20Jernbanestasjon!5e0!3m2!1sen!2sno!4v1695299293752!5m2!1sen!2sno"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="delivery-details">
                                <h1 class="delivery-details-title"><strong>Pakkeboks Bergen Jernbanestasjon</strong>
                                </h1>

                                <p class="delivery-details-address"><strong>Strømgaten 4, 5015 Bergen</strong></p>

                                <div class="delivery-details-button-cont">
                                    <p class="delivery-details-tips">Pakkeboksen står mellom Narvesen og
                                        billettautomaten,
                                        ved inngangen som fører til Bystasjonen
                                    </p>

                                    <button class="delivery-button">Velg</button>
                                </div>

                            </div>
                        </div>

                        <div class="delivery-body-item">
                            <div class="delivery-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1971.3375149655462!2d5.330654277182518!3d60.39010307514533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463cff0381f9a6b1%3A0x45a24c210e74dbcc!2sPakkeboks%20Bergen%20Jernbanestasjon!5e0!3m2!1sen!2sno!4v1695299293752!5m2!1sen!2sno"
                                    width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="delivery-details">
                                <h1 class="delivery-details-title"><strong>Pakkeboks Åsane Senter 12</strong>
                                </h1>

                                <p class="delivery-details-address"><strong>Åsane Senter 12, 5116 Ulset</strong></p>

                                <div class="delivery-details-button-cont">
                                    <p class="delivery-details-tips">Pakkeautomaten står plassert i nederste etasje,
                                        midt i
                                        gamle Arken
                                    </p>

                                    <button class="delivery-button">Velg</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </section>

    </section>

    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/kledelii/includes/footer.php'; ?>

</body>

</html>

<style>
/* delivery header part */

.delivery-header-cont {
    display: flex;
    /* flex-flow: column; */
    width: 50%;
    height: 8%;
    /* background: black; */
    justify-content: center;
    align-items: center;
    margin: auto;
    gap: 10px;
}

select#delivery {
    border: 0;
    background: #f1f1f1;
    padding: 5px;
    border-radius: 4px;
}

/* delivery body part */
.delivery-body-cont {
    display: flex;
    flex-wrap: wrap;
    gap: 5%;
    height: 82vh;
    /* background: black; */
    overflow: scroll;
}

.delivery-body-item {
    width: 45%;
    min-height: 550px;
    position: relative;
}

.delivery-map {
    /* margin: auto; */
    /* position: relative; */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* delivery details */
h1.delivery-details-title {
    font-size: 1.5rem;
    margin: 20px 0px 0px 0px;
}

p.delivery-details-address {
    margin: 0;
    opacity: 0.8;
}

p.delivery-details-tips {
    padding: 10px;
    margin: 0;
    opacity: 0.6;
}

/* */
.delivery-details-button-cont {
    display: flex;
}

p.delivery-details-tips {
    padding: 10px;
    margin: 0;
    opacity: 0.6;
    width: 60%;
}

button.delivery-button {
    width: 30%;
    border: 0;
    height: 40px;
    border-radius: 8px;
}
</style>