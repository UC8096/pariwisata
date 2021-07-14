<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<style>
    #myBtn {
        visibility: hidden;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    #myBtn.show {
        opacity: 1;
        visibility: visible;
    }
</style>

<script>
    function topFunction() {
    var body = $('html, body');

    body.animate({ scrollTop: 0 }, 500, 'swing');
}
</script>