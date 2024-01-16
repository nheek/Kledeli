<script>
    // function for general dark mode - dark mode that applies to everything
    function darkMode() {
        const body = document.querySelector('body');
        const darkModeClasses = ['dark:bg-gray-900', 'dark:text-gray-200']
        body.classList.add(...darkModeClasses);
        // console.log("run")
    }
    // darkMode();

    // function to toggle dark mode manually
    function toggleDarkMode() {
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    }
    toggleDarkMode();
</script>