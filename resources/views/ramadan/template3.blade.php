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
        }
        table {
            width: 700px !important;
            font-size: 12px;
            margin-top: 0px !important;
        }
        table th, table td {
            padding: 0px !important;
            border: 0px !important;
        }
        .table-bordered {
            text-align: center;
            border: 0px !important;
        }
        .table th {
            color: black;
            font-size: 13px;
        }
        .table td {
            font-weight: bold;
        }
        .table tr:nth-child(even){
         background-color: #fff;
         color:#713f2b !important;
        }
        .table tr:nth-child(odd){
         background-color: #c4a169 !important;
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
         width: 100px;
         height:60px;
        }
        .logo img{
         widht:100%;
         height:100%;
        }
        .header{
         position:absolute;
         left:118px;
         top:225px;
         padding: 0;
         margin:0;
         width:525px !important;
        }
        .header-foot{
         position:absolute;
         left:0;
         bottom:-12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body" id="imageHtml" style="position:relative;left:50%; transform:translate(-50%); width:760px; height:1080px;background-image:url({{ asset('images/background/ramadan/ramadan3.jpg') }}); background-size:cover;">
                <div class="w-100 header">
                  <div  class="row justify-content-center mt-2">
                    @if(isset($company->logo))
                        <div class="logo d-flex justify-content-center" style="">
                         <img src="{{ asset($company->logo) }}" />
                       </div>
                      @endif
                   <div>
                    <h3 class="text-black p-0 m-0" style="padding-top:8px !important;"><strong>{{ $company->company_name }}</strong></h3>
                    <p class="text-center text-black p-0 m-0"  style="margin-top:-4px !important;">{{ $company->address }}</p>
                   </div>
                  </div>
                </div>
                <div class="w-100 header-foot" style="">
                 <div class="row justify-content-center">
                   <div class="text-white" style="padding:0px 25px;">
                    <p align="center">
                      @if(isset($company->number))
                       Mobile: {{ $company->number }}
                      @endif
                      @if(isset($company->email))
                       <br/>Email: {{ $company->email }}
                      @endif
                    </p>
                   </div>
                 </div>
                </div>
                <div class="row" style="position:absolute; top:340px;">
                    <div class="col-md-12 d-flex">
                        <div>
                            <table class="table table-bordered table-striped m-2">
                                <thead>
                                    <tr>
                                        <th style="width:100px;">Ramadan</th>
                                        <th>Date</th>
                                        <th>Day</th>
                                        <th>Sehri</th>
                                        <th>Iftar</th>
                                    </tr>
                                </thead>
                                <tbody  id="table1" >

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row" style="position:absolute; top:600px;">
                    <div class="col-md-12 d-flex">
                        <div>
                            <table id="table2" class="table table-bordered table-striped m-2">
                                <tbody  id="table2" >

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row" style="position:absolute; top:835px;">
                    <div class="col-md-12 d-flex">
                        <div>
                            <table id="table3" class="table table-bordered table-striped m-2">
                                <tbody  id="table3" >

                                </tbody>
                            </table>
                        </div>
                    </div>
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
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            const date = new Date(dateStr);
            const day = String(date.getDate()).padStart(2, '0'); // Ensure two digits for the day
            const month = months[date.getMonth()]; // Get the month name
            return `${day} ${month}`; // Format as "01 March"
        }

        function getDayName(dateStr) {
            const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            const date = new Date(dateStr);
            return days[date.getDay()];
        }

        function generateTable(data, tableId, startIndex) {
            let table = document.getElementById(tableId);
            let tableHTML = `
                
                <tbody>
                    ${data.map((day, index) => {
                        const isFriday = getDayName(day.date) === 'Friday';
                        const fridayStyle = isFriday ? 'style="background-color: green; font-weight: bold; color:#fff;"' : '';

                        return `
                            <tr>
                                <td ${fridayStyle}>${String(startIndex + index + 1).padStart(2, '0')}</td>
                                <td ${fridayStyle}>${formatDate(day.date)}</td>
                                <td ${fridayStyle}>${getDayName(day.date)}</td>
                                <td ${fridayStyle}>${day.sehri}</td>
                                <td ${fridayStyle}>${day.iftar}</td>
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

        let chunkSize = 10;
        let totalData = ramadanData.ramadan_2025.length;

        generateTable(ramadanData.ramadan_2025.slice(0, chunkSize), "table1", 0);
        generateTable(ramadanData.ramadan_2025.slice(chunkSize, chunkSize * 2), "table2", chunkSize);
        generateTable(ramadanData.ramadan_2025.slice(chunkSize * 2, totalData), "table3", chunkSize * 2);
    
        // Convert the div to an image and show the download button
        html2canvas(document.querySelector("#imageHtml")).then(canvas => {
                document.querySelector(".container").style.display = "none";
                document.getElementById("downloadContainer").style.display = "block";

                const downloadButton = document.getElementById("downloadButton");
                downloadButton.addEventListener("click", () => {
                    const link = document.createElement("a");
                    link.href = canvas.toDataURL("image/png");
                    link.download = "ramadan_timetable_3.png";
                    link.click();
                });
            });

    }
    document.addEventListener("DOMContentLoaded", initializeTimetable);
    </script>
</body>
</html>