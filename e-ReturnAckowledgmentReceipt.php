

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
  <title>Kenyan Revenue Authority Rental |InvoiceNO:
  <?php echo $row['SuiteUniqueNo'];echo"|SRNO:".date("Ymdhs"); ?> </title>
  <link rel="icon" type="image/x-icon" href="kra.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="html2canvas.js"></script>
    </head>
<style>
	body {
  font-family: "Helvetica", Sans-Serif;
  background-color: #E5E4E2;
  background-image: url("bg.jpg");
  align-items: left;
  justify-content: center;
  
}

input[type=text3], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 0px;
  cursor: pointer;
  text-align: left;
  width: 65%;
  background-color: white;
  color: black;
  font-size: 16px;
}

input[type=text3]:hover {
  background-color: red;
}

input[type=text2], select {
  padding: 1px 2px; 
  margin: 2px;
  float: center;
  border: 0px;
  cursor: pointer;
  text-align: left;
  width: 80%;
  background-color: white;
  color: black;
  font-size: 16px;
}



.container {

margin-top: 1px;
margin-bottom: 0px;
width: 990px;
height: 120px;
color: black;
background-color: white;

}

.container1 {
border: 0px;
margin-top: -4px;
margin-bottom: 0px;
width: 300px;
height: 90px;
color: black;
background-color: white;
margin-right: 680px;
}

.container2 {
border: 0px;
margin-top: -110px;
margin-bottom: 0px;
width: 240px;
height: 90px;
color: black;
background-color: white;
margin-right: -750px;
text-align: right;

}
.container4 {
border: 0px solid #E5E4E2;
margin-top: -100px;
margin-bottom: 0px;
width: 410px;
height: 100px;
color: black;
margin-right: -100px;
background-color:#B6B6B4;
text-align: center;

}


.container5 {
margin-top: -8px;
margin-bottom: 0px;
width: 120px;
height: 30px;
color: black;
background-color: white;
text-align: left;
margin-right: 880px;

}
.container3 {
margin-top: 1px;
margin-bottom: 4px;
width: 1000px;
height: 1200px;
background: #fff;
padding: 1em 1.35em;
border: 1px solid #c9c9c9;
box-shadow: 1px 1px 10px #0000003b;


}


button{
    width:60%;
    padding: 2px 3px;
    margin: 1px 0;
    display: inline-block;
    border-radius: 1px;
    background-color: #DC143C;
    color: white;
    margin: 2px 0;
    border-radius: 2px;
    cursor: pointer;
    float: center;
    font-size: 17px; 
}

.button {border-radius: 18px;}

input[type=tel], select {
    width: 50%;
    padding: 2px 8px;
    margin: 3px 0;
    display: inline-block;
    border: 0px;
    border-radius: 4px;
    font-size: 16px;   
    text-align: left; 
}

input[type=tel1], select {
    width: 20%;
    padding: 2px 80px;
    margin: 3px 0;
    display: inline-block;
    border: 0px;
    border-radius: 4px;
    font-size: 16px;  
    text-align: left; 
}

input[type=changes]:hover {
    background-color: grey;
}


table{  
        border-collapse: collapse;  
        width: 100%;   
       
    }  
th,td{  
    border: 2px solid black;   
    padding: 10px;  
}

hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  
  
}
.horizontal_line {
background-color: black;
width: 100%;
height: 2px;
border-top: 2px bold black;
}


  @media screen{


  }
  .container-fluid{
    height: calc(100%);

  }
  div#display {
    display: flex;
    height: 50%;
    width: 60%;
    align-items: center;
}
@media print{
  div#display {
    display: flex;
    height: auto;
    width: 10%;
    align-items: center;
}
}
#display #field,#display center {
    margin: auto;
}
img {
max-width: 100%;
height: auto;
}

div#code {
    font-weight: 120;
    font-size: 14px;
    align-items: right;
  
}

input[type=test], select {
    width: 0%;
    padding: 0px 0px;
    margin: 0px 0;
    display: inline-block;
    border: 0px solid blue;
    border-radius: 0px;
    box-sizing: border-box;
    font-size: 0px;
}
.container4 {
border: 1px solid #838996;
margin-top: -3px;
margin-bottom: 4px;
width: 1000px;
height: 130px;
background-color: white;
}

</style>

<form action="" method="POST">
<div id="display" type="barcode"> 
<button type="button"  id="generate"> File Now</button>   
<select  id="type">
<option value="C128A"></option>
</select>


</div>            
    


<?php
					include('conn1.php');
					$query=mysqli_query($conn,"select * from `iTaxsignup`");
					while($row=mysqli_fetch_array($query)){
						?>
    <input type="test" name="KRAPIN" id="code" value="<?php echo $row['KRAPIN']; echo "" . date("Ymdhms"); ?>"  readonly="readonly">
    
<?php
					}
				?>
            
      

         
  

</body>
</html>

<script>
  $('#generate').on('click',function(){
    if($('#code').val() != ''){
      $.ajax({
        url:'barcode.php',
        method:"POST",
        data:{code:$('#code').val(),type:$('#type').val(),label:$('#label').val()},
        error:err=>{
          console.log(err)
        },
        success:function(resp){
          $('#display').html(resp)
          $('#bcode-card .card-footer').show('slideUp')
        }
      })
    }
  })

    $('#save').click(function(){
    html2canvas($('#field'), {
    onrendered: function(canvas) {                    
      var img = canvas.toDataURL("image/png");
      
      var uri = img.replace(/^data:image\/[^;]/, 'data:application/octet-stream');
      
      var link = document.createElement('a');
          if (typeof link.download === 'string') {
              document.body.appendChild(link); 
              link.download = 'barcode_'+$('#code').val()+'.png';
              link.href = uri;
              link.click();
              document.body.removeChild(link);
          } else {
              location.replace(uri);
          }
      
    }
  }); 
  })
    $('#print').click(function(){
      var openWindow = window.open("", "", "_blank");
      openWindow.document.write($('#display').parent().html());
      openWindow.document.write('<style>'+$('style').html()+'</style>');
      openWindow.document.close();
      openWindow.focus();
      openWindow.print();
      // openWindow.close();
      setTimeout(function(){
      openWindow.close();
      },1000)
    })
</script>
