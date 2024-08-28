<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/style.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$userID = getCookie('userID');
$userWardrobe = [];
if ($userID) {
    $userDetails = getUserDetailsByID($userID);
    $userWardrobe = json_decode($userDetails['wardrobe_items']) ?? [];
}
$clothes_type = $_GET['clothes_type'];
$gender = $_GET['gender'];
$search_query = $_GET['search_query'];

if ($gender) {
    if ($search_query) {
        $content = getClothesByType($clothes_type, $gender, $search_query);
    } else {
        $content = getClothesByType($clothes_type, $gender);
    }
} else {
    if ($search_query) {
        $content = getClothesByType($clothes_type, "all", $search_query);
    } else {
        $content = getClothesByType($clothes_type);
    }
}

if ($content) {
    while ($result = $content->fetch_assoc()) {
        if (isInArray($result['id'], $userWardrobe)) {
?>
            <div class="bg-gray-100 dark:bg-gray-800 h-[300px] min-w-0 w-[45%] md:min-w-[200px] md:w-[22%] rounded-lg flex flex-col animate-move-up" id="<?php echo $result["id"] ?>" style="border: 2px solid #454545;">
                <div class="h-[50%] w-[140px] relative left-1/2 transform -translate-x-1/2">
                    <img class="transition-all duration-500 ease-in-out" src="<?php echo $result["img"] ?>" alt="<?php echo $result["name"] ?>">
                </div>

                <div class="relative flex flex-col justify-center h-[35%] gap-2">
                    <b class="ml-2"><?php echo $result["name"] ?></b>
                    <div class="ml-4 w-[90%] cursor-pointer underline text-sm" onclick="goToPage('/pages/garderobe');">Se i garderobe</div>
                </div>

                <button id="<?php echo $result["id"] ?>" class="border-0 text-sm md:text-base text-center w-[90%] bg-white dark:bg-gray-900 mx-auto h-[15%] mb-10 rounded-md absolute bottom-0 mb-2 left-1/2 transform -translate-x-1/2 cursor-not-allowed opacity-50" onclick="addToUserWardrobe(this.id);" disabled>
                    Allerede i garderobe
                </button>
            </div>
        <?php } else { ?>
            <div class="bg-gray-100 dark:bg-gray-800 h-[300px] min-w-0 w-[45%] md:min-w-[200px] md:w-[22%] rounded-lg flex flex-col animate-move-up" id="<?php echo $result["id"] ?>">
                <div class="h-[50%] w-[140px] relative left-1/2 transform -translate-x-1/2">
                    <img class="transition-all duration-500 ease-in-out" src="<?php echo $result["img"] ?>" alt="<?php echo $result["name"] ?>">
                </div>

                <div class="relative flex flex-col justify-center h-[35%] gap-2">
                    <b class="ml-2"><?php echo $result["name"] ?></b>
                    <div class="flex gap-[10%] justify-center h-[30%]">
                        <select class="dark:bg-gray-900 cursor-pointer w-[40%] rounded-md text-center">
                            <?php foreach (json_decode($result["sizes"]) as $size) { ?>
                                <option value="<?php echo $size ?>"><?php echo $size ?></option>
                            <?php } ?>
                        </select>
                        <span class="text-sm p-1 w-[40%] text-center"><?php echo $result["stock"] ?> igjen</span>
                    </div>
                </div>

                <button id="<?php echo $result["id"] ?>" class="border-0 text-sm md:text-base text-center w-[90%] bg-white dark:bg-gray-900 mx-auto h-[15%] mb-10 rounded-md absolute bottom-0 mb-2 left-1/2 transform -translate-x-1/2 hover:invert" onclick="addToUserWardrobe(this.id);">
                    Legg til garderobe
                </button>
            </div>
    <?php }
    }
} else { ?>
    <div class="empty-here">
        <img class="empty-here-img" src="/uploads/empty.png" alt="empty-illustration">
        <span class="empty-here-txt">Seems empty here...</span>
    </div>
<?php } ?>