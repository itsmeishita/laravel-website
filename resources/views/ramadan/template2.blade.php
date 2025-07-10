<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan 2025 Timetable</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f3e9;
            font-family: 'Arial', sans-serif;
        }
        .title {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            letter-spacing: 2px;
            font-weight: bold;
            font-family: italic;
            border-collapse: collapse;
        }
        table {
            width: 360px !important;
            font-size: 11px;
            margin-top: 0px !important;
        }
        table th, table td {
            padding: 0px !important;
        }
        .table-bordered {
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .table-bordered td{
         border:none !important;
        }
        .table th {
            background: #713f2b;
            color: #fff;
            border:none;
        }
        .table td {
            font-weight: bold;
        }
        .table tr:nth-child(even){
         background-color: #fff;
         color:#713f2b !important;
        }
        .table tr:nth-child(odd){
         background-color: #ba801d !important;
         color:#fff;
        }
        #downloadContainer{
         display: none;
         position: fixed;
         left: 50%;
         top:50%;
         transform: translateX(-50%);
        }
        #downloadButton {
             /* Hidden by default */
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
        #downloadButton:hover {
            background-color: #218838;
        }
        .logo{
         width: 200px;
         height:60px;
        }
        .logo img{
         widht:100%;
         height:100%;
        }
        .slogan{
         color: #713f2b;
         font-size:12px;
         font-style:italic;
        }
        .header{
         position:absolute;
         top:10px;
         width: 400px !important;
         right:30px;
        }
        .header-foot{
         position:absolute;
         right:60px;
         top:300px;
         width:360px !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body" id="imageHtml" style="position:relative;left:50%; transform:translate(-50%); width:760px; height:1080px;background-image:url({{ asset('images/background/ramadan/ramadan2.jpg') }}); background-size:cover;">
                <div class="header">
                     @if(isset($company->logo))
                       <div class="row justify-content-center">
                        <div class="logo d-flex justify-content-center">
                         <img src="{{ asset($company->logo) }}" />
                        </div>
                       </div>
                       @endif
                       <div class="row justify-content-center">
                         @if(isset($company->slogan))
                         <p class="slogan">{{$company->slogan}}</p>
                         @endif
                       </div>
                  <div  class="row justify-content-center" style="margin-top:-10px;">
                   <div>
                    <h2 class="p-0 m-0" style="color:#ba801d; text-transform:uppercase; font-size:18px;"><strong>{{ $company->company_name }}</strong></h2>
                   </div>
                  </div>
                </div>
                <div class="w-100 header-foot" style="">
                 <div class="row justify-content-end">
                   <div class="text-white" style="padding:0px 25px;">
                    <p align="center" style="color:#555; font-size:12px; font-weight:bold;">
                    @if(isset($company->number))
                      <span style="color:#713f2b;">Address : </span>{{ $company->address }}
                    @endif
                    <br/>
                    @if(isset($company->website))
                      <span style="color:#713f2b;">Website : </span>{{ $company->website }}
                    @endif
                    <br/>
                    @if(isset($company->number))
                    <span style="color:#713f2b;">Mobile: </span>{{ $company->number }}
                    @endif &nbsp;
                     @if(isset($company->email))
                     <span style="color:#713f2b;">Email: </span>{{ $company->email }}
                     @endif
                    </p>
                   </div>
                 </div>
                </div>
                <div style="position:absolute;top:380px; right:50px;">
                    <table id="table1" class="table table-bordered table-striped m-2"></table>
                </div>
            </div>
        </div>
    </div>

    <!-- Download Button -->
    <div id="downloadContainer">
     <p>Your Image is Ready..</p>
     <button id="downloadButton">Download Image</button>
    </div>
    
    <!-- Include html2canvas library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>

        async function fetchRamadanData() {
            try {
                const response = await fetch('https://chikuweb.in/api/ramadan/all'); // Replace with your API URL
                if (!response.ok) {
                    throw new Error('Failed to fetch data');
                }
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Error fetching data:', error);
                return null;
            }
        }

        function formatDate(dateStr) {
            const months = [
                "JAN", "FEB", "MAR", "APR", "MAY", "JUN",
                "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"
            ];
            const [year, month, day] = dateStr.split('-');
            const date = new Date(year, month - 1, day);
            const formattedDay = String(date.getDate()).padStart(2, '0');
            const monthName = months[date.getMonth()];
            return `${formattedDay} ${monthName}`;
        }

        function getDayName(dateStr) {
            const days = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SAT"];
            const [year, month, day] = dateStr.split('-');
            const date = new Date(year, month - 1, day);
            return days[date.getDay()];
        }

        function generateTable(data, tableId, startIndex) {
            let table = document.getElementById(tableId);
            let tableHTML = `
                <thead>
                    <tr>
                        <th style="">Ramadan</th>
                        <th>Day</th>
                        <th>Date</th>
                        <th>Sehri</th>
                        <th>Iftar</th>
                    </tr>
                </thead>
                <tbody>
                    ${data.map((day, index) => {
                        return `
                            <tr>
                                <td>${String(index + 1).padStart(2, '0')}</td>
                                <td>${getDayName(day.date)}</td>
                                <td>${formatDate(day.date)}</td>
                                <td>${day.sehri}</td>
                                <td>${day.iftar}</td>
                            </tr>
                        `;
                    }).join('')}
                </tbody>
            `;
            table.innerHTML = tableHTML;
        }
        async function initializeTimetable() {
        const ramadanData = await fetchRamadanData();
        if (!ramadanData) {
            alert('Failed to load Ramadan timetable. Please try again later.');
            return;
        }

        let totalData = ramadanData.ramadan_2025.length;

        generateTable(ramadanData.ramadan_2025, "table1");

        // Convert the div to an image and show the download button
        html2canvas(document.querySelector("#imageHtml")).then(canvas => {
                document.querySelector(".container").style.display = "none";
                document.getElementById("downloadContainer").style.display = "block";

                const downloadButton = document.getElementById("downloadButton");
                downloadButton.addEventListener("click", () => {
                    const link = document.createElement("a");
                    link.href = canvas.toDataURL("image/png");
                    link.download = "ramadan_timetable_2.png";
                    link.click();
                });
            });

       }
       document.addEventListener("DOMContentLoaded", initializeTimetable);
    </script>
</body>
</html>