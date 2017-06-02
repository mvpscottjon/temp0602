<script>
    var xmlhttp;
    if (window.XMLHttpRequest) {
        // code for modern browsers
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for old IE browsers
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    function prepare() {

        var account=
        document.getElementById("account").value;
//        alert(account);
        xmlhttp.onreadystatechange = callback;
        xmlhttp.open("GET", "20170602_52.php?a="+account, true);
        xmlhttp.send();


    }

    function callback() {
        if (this.readyState == 4 && this.status == 200) {
           document.getElementById("test1").innerHTML =
               this.responseText;

        }



//    function test1() {
//        xmlhttp.onreadystatechange = function () {
//            if (this.readyState == 4 && this.status == 200) {
////            document.getElementById("here").innerHTML = 'brad';
//
//                document.getElementById("here").innerHTML = this.responseText;
//            }
//        };
//        xmlhttp.open("GET", "20170602_51.php", true);
//        xmlhttp.send();
//    }
</script>


<form action="addAccountV2.php" onblur="prepare()">
    帳號:<input type="text" name="account" id="account">
    <span id="hint"></span><br>
    密碼:<input type="password" name="password"><br>
    真實姓名:<input type="text" name="realname"><br>
    <input type="submit" value="Go" ">


</form>



<hr>

<div id="test1"></div>