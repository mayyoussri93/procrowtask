


<style>

    .container1 {
        height: 50%;
        width: 100%;
        display: flex;
        position: fixed;
        align-items: center;
        justify-content: center;
    }
    .container2 {
        height: 75%;
        width: 100%;
        display: flex;
        position: fixed;
        align-items: center;
        justify-content: center;
    }

    .myfonty{
        font-family: 'Cairo', sans-serif;
    }

    .mycolor2{

        color: #e74c3c;
    }

    .mycolor3{

        color: #27ae60;
    }


    .mycolor4{

        #  color: #c0392b;
    }


    .carousel-caption h1, .carousel-caption h2, .carousel-caption h3, .carousel-caption h4, .carousel-caption h5, .carousel-caption h6{
        color:#000;

    }




</style>

<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">







<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="/img/p1.jpg" data-color="lightblue" alt="First Image">

        </div>
        <div class="item">
            <img src="/img/p2.jpg" data-color="firebrick" alt="Second Image" >

        </div>
        <div class="item">
            <img src="/img/p3.jpg" data-color="violet" alt="Third Image">
        </div>

    </div>

    <!-- Controls -->

</div>

<style>
    h3 {
        display: inline-block;
        padding: 10px;
        background: #fff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        opacity: 0.7;
    }

    .p {
        text-align: center;
        padding-top: 40px;
        font-size: 13px;
    }

    .carousel-inner .item{
        height:500px;
        background-size:cover;
        background-position: center center;
    }

    .carousel-indicators li {
        background: #ccc;
    }

    .carousel-indicators .active {
        background: #CF000F;
    }


</style>
<script>
    $('.carousel').carousel({
        interval: 2000,
        pause: "false"
    });
</script>

