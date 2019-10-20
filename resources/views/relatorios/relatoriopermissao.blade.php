<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reltório de Permissao</title>
    <style>
        header{
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            /** Extra personal styles **/
            background-color: rgb(0,139,139);
            color: white;
            text-align: center;
            font-family:"Times New Roman";
            font-style: normal;
            font-size: 28px;
            line-height: 1.5cm;
        }
        footer {
            position: fixed; 
            bottom: 0cm; 
            left: 0cm; 
            right: 0cm;
            height: 2cm;
            /** Extra personal styles **/
            background-color: rgb(0,139,139);
            color: white;
            text-align: center;
            font-family:"Times New Roman";
            font-style: normal;
            font-size: 28px;
            line-height: 1.5cm;
        }
        th{
            text-align: center;
            font-family:"Times New Roman";
            font-style: normal;
            color: #696969;
        } 
        td{
            text-align: left;
            font-family:"Times New Roman";
            font-style: normal;
            color: #696969;
        }   
        .clearfix {
            clear: both;
        }  
        body {
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }
    </style>
</head>
<body>  
    <header>
        Permissões cadastradas SAR-WEB        
   </header>
   <br class="clearfix" /><br class="clearfix" />
   <footer>
       <div class="direitos_reservados">
           <font color="white">Sistema de Análise de Riscos - SAR WEB</font>
        </div>
    </footer>
    <br class="clearfix" />
    <div class="box-body">
        <table align="center" border=1 cellspacing=0 cellpadding=2 bordercolor="#A9A9A9">
            <thead>
                <tr>
                    <th>Ordem</th>
                    <th>Permissão</th>
                    <th>Perfil</th>
                </tr>
            </thead>
            <tbody>
            @foreach($dados as $key => $valor)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$perfilpermissao->permissao->nome}}</td>
                    <td>{{$perfilpermissao->perfil->nome}}</td>            
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>