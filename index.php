<!DOCTYPE html>
<html>
    <head>
        <title>
            This is a test of the JS ajax calls.
        </title>

    </head>
    <script
        src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
        crossorigin="anonymous"></script>
    <body>
        <div id="myTest">
            <p id="pTest">Hello</p><button id="button">Test</button>
        </div>
    <script type="text/javascript">
        $("button").click(function(){
            $.ajax({
                method:"post",
                url:"http://localhost:8080/service/resp.json",
                data:{"name":"chad"}


            }).done(function(msg){
                document.write("<ul>");
                for(key in msg){
                    document.write("<li>"+key + ":"+"");
                    if(Array.isArray(msg[key])){
                        console.log(key + ":")
                        document.write("<ul>")
                        
                        for (k in msg[key]){
                            var obj = msg[key][k];
                            console.log("\t" + k + " " + msg[key][k].id + " " + msg[key][k].name);
                            document.write("<li>"+"\t"  + msg[key][k].id + " " + msg[key][k].name+"</li>")
                        }
                        document.write("</ul>");
                    }else{
                    console.log(key + " " + msg[key]);
                        document.write( " " + msg[key] + "</li>");
                    }
                    
                }
                document.write("</ul>");
                
            })
        })
    </script>
    </body>
</html>