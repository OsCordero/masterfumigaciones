<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reporte Masterfumigaciones</title>

    <style type="text/css">
            .clearfix:after {
          content: "";
          display: table;
          clear: both;
        }
        
        a {
          color: #5D6975;
          text-decoration: underline;
        }
        
        body {
          position: relative;
          width: 21cm;
          height: 29.7cm; 
          margin: 0 auto; 
          color: #001028;
          background: #FFFFFF; 
          font-family: Arial, Arial; 
          font-size: 12px; 
          font-family: Arial;
        }
        
        header {
          padding: 10px 0;
          margin-bottom: 30px;
        }
        
        #logo {
          text-align: left;
          margin-bottom: 10px;
          position: absolute;
         
        }
        
        #logo img {
          width: 150px;
        
        }
        
        h1 {
         
          
          color: #070707;
          font-size: 2.5em;
          
          font-weight: normal;
          text-align: center;
          margin: 0 0 20px 0;
          background: url(dimension.png);
          position: relative;
        }

        h2 {
          color: #070707;
          font-size: 1.75em;
          
          font-weight: normal;
          text-align: left;
          margin: 0 0 20px 0;
          background: url(dimension.png);
          position: relative;
        }
        
        #project {
          float: left;
        }
        
        #project span {
          color: #070707;
          text-align: right;
          width: 52px;
          margin-right: 10px;
          display: inline-block;
          font-size: 1.0em;
        }
        
        #company {
          float: right;
          text-align: right;
        }
        
        #project div,
        #company div {
          white-space: nowrap;        
        }
        
        table {
          width: 90%;
          border-collapse: collapse;
          border-spacing: 0;
          margin-bottom: 20px;
        }
        
        table tr:nth-child(2n-1) td {
          background: #F5F5F5;
        }
        
        table th,
        table td {
          text-align: center;
        }
        
        table th {
          padding: 5px 20px;
          color: #070707;
          border-bottom: 1px solid #C1CED9;
          white-space: nowrap;        
          font-weight: normal;
          font-size: 1.80em;
        }
        
        table .service,
        table .desc {
          text-align: left;
        }
        
        table td {
          padding: 20px;
          text-align: right;
        }
        
        table td.service,
        table td.desc {
          font-size: 1.75em;
          vertical-align: top;
        }
        
        table td.unit,
        table td.qty,
        table td.total {
          text-align: center;
          font-size: 1.75em;
        }
        
        table td.grand {
          border-top: 1px solid #5D6975;;
        }
        
        #notices .notice {
          color: #5D6975;
          font-size: 1.2em;
        }
        
        footer {
          color: #5D6975;
          width: 100%;
          height: 30px;
          position: absolute;
          bottom: 0;
          border-top: 1px solid #C1CED9;
          padding: 8px 0;
          text-align: center;
        }

      
    </style>
    
    
  </head>
  <body>
    <header class="clearfix">
    </br>
    <h1>
      <div id="logo">
      <img src="/img/logo.jpg">
      
      </div>
      MasterFumigaciones
      <br>
     
    </header>
    <main>
    </br>
    <h1>
     <b>Fumigaciones canceladas en un período de tiempo.</b> 
      <br>
        </br>
        <br>
      </h1>
      <h2 ><b>Fecha: </b>{{$fecha}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <b>Generado por: </b>{{$user}}</h2>
       </br>
       </br>
      
       <h2 ><b>Fecha inicio: </b>{!! \Carbon\Carbon::parse($fechaInicio)->format('d-m-Y') !!} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <b>Fecha fin: </b>{!! \Carbon\Carbon::parse($fechaFin)->format('d-m-Y') !!} </h2>
</br>
</br>
      <table>
        <thead>
          <tr>
            <th class="service" width="35%">Nombre cliente</th>
            <th class="desc" widht="30%">Fecha</th>
            <th  widht="30%">Tipo de fumigación</th>
            
          </tr>
        </thead>
        <tbody>
        @foreach ($clients as $client)
        @if($client->establishments)
                    @foreach ($client->establishments as $establishment)
                   @if($establishment->appointments)
                   @foreach($establishment->appointments as $appointment)
                   @if($appointment->cancelado==true)
          <tr>
            <td class="service"> {{$appointment->establishment->client->nombre_cliente}}</td>
            <td class="desc">{!! \Carbon\Carbon::parse($appointment->fecha)->format('d-m-Y') !!}</td>
            <td class="qty">{{$appointment->fumigation_type->nombre_tipo_fumigacion}}</td>
            
          </tr>
          @endif
                        @endforeach
                        @endif
                        @endforeach
                        @endif
                        @endforeach

        </tbody>
      </table>

 
    </main>
  </body>
</html>