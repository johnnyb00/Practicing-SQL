<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 
        define("MSG", "Heeye");
        echo MSG;
        $string1 = "Hello world!"; //double quotes
        $int1 = 12;
        $string2 = 'Hello world!';  //single quotes
        function getName() {
          global $int1;
          echo $int1;
        }
        getName();

        $names = array("<h1>Yay<h1>", "<button>Press</button>");
        echo $names[0];
        echo $names[1];
        echo $names[2];

        $people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
        // or
        $people['David'] = "27";
        $people['Amy'] = "21";
        $people['John'] = "42";
        echo $people['David'];


        $people = array(
        
           'online'=>array('David', 'Amy'),
        
           'offline'=>array('John', 'Rob', 'Jack'),
        
           'away'=>array('Arthur', 'Daniel')
        
        );


        $people = array (
          'online'=>array("David", "Amy"),
          'offline'=>array('John', "Rob", "Jack"),
          'away'=>array("arthur", 'daniel')
        )

    ?> 
    
    
  </body>
</html>
