<html>
    <head>
        <link rel="stylesheet" href="task-js.css">
        <script src="classes.testjsscript.js"></script>        
    </head>
    <body>
        <select class="any-class-name" name ="sel1"></select>

        <select class="any-class-name" name ="sel2"></select>

        <select class="any-class-name" name ="sel3"></select> 

        <select class="any-class-name" name ="sel4"></select>

    </body>

    <script type="text/javascript">
        const selects = new SmartSelects();

        selects.setSelector(".any-class-name");

        selects.setOptions({
            white : "White",
            black : "Black",
            gray : "Gray",
            brown : "Brown",
            red : "Red",
            orange : "Orange",
            yellow : "Yellow",
            green : "Green",
            blue : "Blue",
            purple : "Purple"
        });

        selects.setDefaultValue("Nothing");

        selects.init();
    </script>
</html>