
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css');?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js');?>"><</script>
        
        
    <link rel="stylesheet" href="<?php echo base_url('css_files/header.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css_files/style_register.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css_files/buttons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css_files/AdminPosCenter.css');?>">
    <script type="text/javascript" src="<?php echo base_url('jquery/jquery-3.6.0.min.js');?>"></script>

    

  
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="<?php echo base_url('images/StudNetLogo.svg')?>" alt="StudNet" class="logo">  
        <a class="logoCenter" href="<?= base_url("$controller/index")?>"> <img src="<?php echo base_url('icons/house-solid.svg')?>" alt="StudNet" class="logoCenter">  </a>
    </div>

    <div class="content">
        <div class="container">
        
          <div class="title">Add University</div>
            <hr style="border-top:2px solid #e6e6e6">
            <?php if(!empty($errors)) echo "<span style='color:red'>$errors</span>";?>
            <form action="#" >
                <div class="user-details">

                    <div class="section">
                       
                            <div class="input-box posCentr col-6">
                                <input type="text" class="username" id="a1" name="usernameAUni" placeholder="Username">
                            </div>
                             <div class="input-box posCentr col-6">
                                         <input type="text" class="username" id="a2" name="fullnameAUni" placeholder="Full name">
                                </div>
                             <div class="input-box posCentr col-6">
                                <input type="date" class="date_of_birth" id="a3" name="date_of_birthAUni" placeholder="Date of establishment">
                            </div>
                        
                            
                            <div class="input-box posCentr col-6">
                                
                                <div class="dropdown-select " tabindex="-1">
                                    <div class="select-btn">
                                            <span name ="s1AUni" id="s1AUni">Country</span>
                                            <img src="<?php echo base_url('icons/caret-down-solid.svg')?>" alt="+">
                                    </div>
                                    <div class="dropdown-content">
                                        <ul class="options" name ="s1AUni">
                                            <li>Serbia</li>
                                            <li>Montenegro</li>
                                            <li>Serbia</li>
                                            <li>Montenegro</li>
                                        </ul>
                                    </div>
                                </div>
                                 
                            </div>
                        
                            <div class="input-box posCentr col-6">
                                <input type="email" class="email" id="a4" name="emailAUni" placeholder="E-mail">
                            </div>
                        
                    </div>
                    
                      
                    <input class="buttonAAU" id="addAU" name="Add" type="button" value="Add">         
                    <?= anchor("$controller/AddIUni","<input class='buttonAAU' id='addCU' name='Cancle' type='button' value='Cancle'>")?>
         
                    
                    <div class="popup-background">
                    <div class="popup-container">
                        <div class="popup-top">
                            <div class="top-image">
                                <img>
                            </div>
    
                            <div class="top-message">
                                <span></span>
                            </div>
                        </div>
                        <div class="popup-bottom">
                            <div class="bottom-message">
                                <pre class="preclass"><span></span></pre>
                            </div>
                            <div class="bottom-next">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                     <div class="help-background">
                    <div class="help-container">
                        <div class="help-c">
                            <div class="help-message">
                                <span>-Username must contain a letter as a first character and letters, numbers or underscores.</span><br>
                               
                                <br><span>-Full name must have a capital letter, followed by 1-15 lowercase letters.</span><br>
                                <br><span>-E-mail must be in an e-mail form (abc@def.com).</span><br>
                                <br><span>-Date of birth can't a date in the future.</span><br>                        
                                
                            </div>
                            <div class="help-next">
                                <span>Fill the form</span>
                     
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
        </form> 
        
        </div>
        
    </div>
         <script src="/js_file/AdminScript.js"></script>
    </body>
</html>

