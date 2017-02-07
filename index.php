<http>
<head>
    <?php 
    
    $namn = $_GET['namn'];
    
    $t=time();
    
    $background;
    
    $seconds=date("s",$t);
    
    if(is_int($seconds/2)) {
        $background = "background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 30%, rgba(0,0,255,1) 32%, rgba(0,0,255,1) 64%, rgba(255,0,0,1) 66%, rgba(255,0,0,1) 100%);";
    } else {
        $background = "background: linear-gradient(180deg, rgba(0,0,128,1) 0%, rgba(0,0,128,1) 38%, rgba(255,255,0,1) 39%, rgba(255,255,0,1) 44%, rgba(255,255,0,1) 59%, rgba(0,0,128,1) 60%, rgba(0,0,128,1) 100%);";
    }
    
    
    
    
    ?>
    
    
    <style>
        
        
        body {
            <?php echo $background; ?>
            font-size: 70px;
            font-family:cursive;
            color: #fd068a;
            text-align: center;
            margin: 220px;
            text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);
        }
        
        
        
        
        
    </style>
</head>
    
    <body> 
        
        
        
    Hej
    <?php echo $namn; ?>
        
    <br>
        
    <?php echo(date("s",$t)); ?>
    
    
    </body>
    
</http>