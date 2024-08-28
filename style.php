<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        darkMode: 'class',
    }
</script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@400;600;700&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
        text-decoration: none;
        color: inherit;
    }

    body {
        margin: 0;
    }

    button {
        cursor: pointer;
    }

    /* WCAG */

    /* Visually hide the label, but keep it accessible to screen readers */
    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }

    /* */
    section.main {
        display: flex;
        margin: 20px 0px 0px 0px;
    }

    /* right section */
    section.right-section {
        /* width: 78%; */
    }

    section.body-section {
        margin: 15px 0px 0px 0px;
    }

    /* custom */
    .opacity05 {
        opacity: 0.5 !important;
    }

    .txt-blue {
        color: blue !important;
    }

    /* empty here */
    .empty-here {
        width: 100%;
        position: relative;
    }

    img.empty-here-img {
        height: 60%;
        position: absolute;
        left: 50%;
        top: 40%;
        transform: translate(-50%, -50%);
    }

    @media (min-width: 768px) {
        img.empty-here-img {
            left: 45%;
        }
    }

    span.empty-here-txt {
        display: block;
        position: absolute;
        top: 70%;
        left: 45%;
        transform: translate(-50%, -50%);
        font-weight: 600;
    }

    /* animations */
    .animate-move-up {
        position: relative;
        animation: moveUp 1s ease forwards;
    }

    @keyframes moveUp {
        from {
            transform: translateY(100px);
            /* Move the element 100px down initially */
            opacity: 0;
            /* Initially hidden */
        }

        to {
            transform: translateY(0);
            /* Move the element to its original position */
            opacity: 1;
            /* Fully visible */
        }
    }

    @keyframes fadeToLeft {
        0% {
            opacity: 1;
            transform: translateX(0);
        }

        100% {
            opacity: 0;
            transform: translateX(-100%);
        }
    }

    .fade-to-left {
        /* Initial styles */
        opacity: 1;
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .fade-out {
        /* Apply the fade-to-left animation */
        animation: fadeToLeft 1s ease-out forwards;
    }
</style>