<div class="hidden fixed left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-red-600 py-2 px-1 rounded-md text-gray-100 text-l max-w-max break-words z-[2]" id="warning-div">

</div>

<script>
    function getPage(elementID, pageUrl) {
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onload = function() {
            document.getElementById(elementID).innerHTML = this.responseText;
        }
        xmlhttp.open("GET", pageUrl);
        xmlhttp.send();
    }

    function goToPage(pageURL) {
        // Replace 'newpage.html' with the URL of the page you want to navigate to
        window.location.href = pageURL;
    }


    function setCookie(cname, cvalue, exdays = 90) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        let name = cname + "=";
        let decodedCookie = decodeURIComponent(document.cookie);
        let ca = decodedCookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function deleteCookie(cname) {
        document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }

    function showWarning(warning_text, backgroundColor = 'red') {
        const warning_div = document.getElementById('warning-div');
        let warning_text_length = warning_text.length;

        warning_div.style.display = 'block';
        if (backgroundColor != 'red') {
            warning_div.style.backgroundColor = 'green';
        }

        setTimeout(() => {
            warning_div.style.display = 'none';
        }, warning_text_length * 100)

        warning_div.innerHTML = warning_text;
    }

    /* used in header.php */
    function getNthWord(str, nthWord) {
        const words = str.split(/\s+/); // Split the string into words
        if (nthWord > 0 && nthWord <= words.length) {
            return words[nthWord - 1]; // Return the nth word (adjusted index)
        } else {
            return null; // Return null for invalid input
        }
    }

    function maskNthWord(inputElement, wordIndexPlusOne) {
        let wordIndex = wordIndexPlusOne - 1;
        let inputElementValue = inputElement.value;

        const words = inputElementValue.split(/\s+/); // Split input into words
        if (words.length < wordIndexPlusOne) {
            return '';
        }

        // strToSaveOriginalStr += words[wordIndex].slice(-1);
        let originalLastLetter = words[wordIndex].slice(-1);
        // let originalLastLetter = inputElementValue;
        words[wordIndex] = '*'.repeat(words[wordIndex].length); // Mask the word
        inputElement.value = words.join(' '); // Update input value with masked word

        return originalLastLetter;
    }


    function splitIntoWords(inputString) {
        return inputString.split(/\s+/);
    }
</script>