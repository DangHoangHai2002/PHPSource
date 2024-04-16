<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <?php 
        /*
        function fname($Name){
            echo "$Name.Refsnes.<br>";
        };
        fname("Jani");
        fname("Hege");
        fname('STALE');
        fname("Kai jim");
        function add5(&$value){
            $value += 5;
        };
        $num=2;
        add5( $num );
        echo $num . "<br/>";
        function sumMyNumber(...$x){
            $n=0;
            $len=count($x);
            for($i=0;$i<$len;$i++) {
                $n+=$x[$i];
            }
            return $n;
        };
        $a=sumMyNumber(5,2,6,2,7,7);
        echo "Sum of numbers: ". $a;
        
        function addNum(int $a,int $b) :float{
            return $a+$b;
        }
        echo addNum(5,5);
        $car=array('Volvo','BM  V','Toyota');print_r ($car);;
        print('<br>');
        $car=['BMV','Toyota'];print_r($car);
        $car=[
            'Volvo',
            'BMV',
        ];print_r( $car ) ;
        print('<br>');
        $car=[
            0=>'Volvo',
            1=>'BMV',
            2=>'Toyota'
        ];print_r ($car);
        print('<br>');
        $car=[];
        $car[0]= 'Volvo';
        $car[1]='BMV';
        $car[2]='Toyota';
        print_r($car);
        print('<br>');
        $myArr=[];
        $myArr[0]="apples";
        $myArr[1]="fruit";
        $myArr['fruit']=["orange"];
        print_r($myArr);
        print('<br>');
        $fruit=array('apples',"banana","oranges");
        $fruit[]='Cherry';
        print_r($fruit);
        print('<br>');
        $fruit=array('Apples','Banana');
        array_push($fruit,'Kiwi');
        print_r( $fruit );
        print('<br>');
        $car=array("Type"=>"Ford", "Model"=>"Mustang", "Year"=>1964);
        $car+= ["Color"=>"Red"] ;
        print_r($car);
        print('<br>');
        $car=array('Volvo','BMV','Toyota');
        unset($car[1]);
        echo $car[0],',',$car[2],'<br>';
        echo $car[0],',',$car[1];
        
        $x=75;
        function myFunction(){
            global  $x; //access the variable outside of this
            echo $GLOBALS['x'];//access it using GLOBALS
            echo "<br>";
            echo $x;
            echo "<br>";
        }
        myFunction();
        echo $_SERVER['PHP_SELF'];
        echo '<br>';
        echo $_SERVER['SERVER_NAME'];
        echo '<br>';
        echo $_SERVER['HTTP_HOST'];
        echo '<br>';
        echo $_SERVER['HTTP_REFERER'];
        echo '<br>';
        echo $_SERVER['HTTP_USER_AGENT'];
        echo '<br>';
        echo $_SERVER['SCRIPT_NAME'];
        echo '<br>';
        */
        $str='Hanoi city';
        $ptrn='/Hanoi/i';
        echo preg_match($ptrn,$str),'<br>';
        $str = 'the rain in spain falls mainly on the plain';
        $pat= '/ain/i';
        echo preg_match_all( $pat, $str);
        $str='Hanoi city';
        $ptrn='/Hanoi/i';
        echo preg_replace($ptrn,'Japan',$str);
        ?>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
