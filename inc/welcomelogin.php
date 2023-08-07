<ul>
    <h1>Welcome to Pairs</h1>
    <br/>
    <button type='button' class='btn btn-outline-secondary' onclick="window.location.href= 'pairs.php'">Click here to play</button>
    <br/>
    <br/>
    <button type='button' class='btn btn-outline-danger' onclick="deleteCookies()">Logout</button>
    



</ul>
<script>
function deleteCookies() {
    var Cookies = document.cookie.split(';');
    for (var i = 0; i < Cookies.length; i++)
        document.cookie = Cookies[i] + "=;expires=" + new Date(0).toUTCString();
    location.reload();
}
</script>