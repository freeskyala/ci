<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
<body>

<div id="container">
    <h1>
        <a href="<?php echo site_url();?>/welcome/good">欢迎光临</a>
        <a href="javascript:void(0);" onclick="show();">点击</a>
    </h1>

</div>

<script type="text/javascript">
    
    function show(){

        var url = "<?php echo site_url();?>/welcome/good";

         $.ajax({
            url:url,
            data:'',
            type:'POST',
            success:function(data){
                alert(data)
            },
            error:function(){
                alert(11111)
            }
        });

    }
    
</script>

</body>
</html>
