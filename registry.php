<?php include("nav.php"); ?>
<script>
function goBack() {
    window.history.back();
}
</script>
<style>
    .registrygoback {
        background-color: #FFDF00;
        color: #061934;
    }
    .registrygoback:hover {
        background-color: #FFDF00;
        color: #061934;
        opacity: .8;
    }
</style>
<div style="text-align:center;padding-bottom: 100px;padding-top: 100px;">
    <img src="/icons/xmas139.png" alt="Registry" />
    <h1>Registry Information<br>Coming Soon!</h1>
    <button class="btn btn-default btn-lg registrygoback" onclick="goBack()"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</button>
</div>
<?php include("footer.php"); ?>