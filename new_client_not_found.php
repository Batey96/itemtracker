<script type="text/javascript" language="JavaScript">
    function send_url(){
        document.cookie="fname=<?php echo $person->fname?>";
        document.cookie="lname=<?php echo $person->lname?>";
    }
</script>
<div class="col-sm-5">
    <hr>
    <div class='panel panel-danger'>
        <div class='panel-heading'>
            <h3 class='panel-title'>
                <span class='glyphicon glyphicon-ban-circle'></span>
                Result Not Found
            </h3>
        </div>
    </div>
    <div class='panel-body'>
        <p>Sorry,we couldn't find your item.Leave us your number so we can send you an SMS whenever we find any of your items anytime</p>
        <form action='index.php' method='post'>
            <div class='form-group'>
                <input type='tel' class='form-control' id="t" name='search_tel' placeholder='Leave your number' required='true'/>
            </div>
            <button onclick="send_url()" type='submit' class='btn btn-success' style='background-color: darkgreen' name='num_btn'>Submit</button>
        </form>
    </div>
</div>
