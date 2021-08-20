<?php
function myfunction(){
    if(true){
        header("Location:site2.html");
    }
    return "a";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap');
        html{
            height: 100%;
        }
        body{
            width: 100%;
            height: 100%;

        }
        input{
            font-family: 'Merienda', cursive;
            border: 0;
            font-size: xx-large;
            border-width: 0;
            width: 100%;
            height: 100%;
            outline: none;
            margin: auto;
            text-align: center;
        }
        *:focus {
            outline: none;
        }

    </style>
    <title></title>
</head>
<body>
<input type="text" onchange="textchangeEvent()" value="Atra Gülai un Ilian tauthr ono un atra ono Waíse skölir frá Rauthr. " autocomplete="off"/>

<script type="text/javascript">
    function textchangeEvent() {
        alert("textChanged");
        a = "<?=myfunction();?>";
        alert(a);
    }
</script>
</body>
</html