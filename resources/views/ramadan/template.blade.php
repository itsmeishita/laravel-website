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
            width: 480px !important;
            font-size: 10px;
            margin-top: 0px !important;
        }
        table th, table td {
            padding: 0px !important;
        }
        .table-bordered {
            border: 3px solid #525d65;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            background: #ced1d2;
            text-align: center;
        }
        .table th {
            background: #ced1d2;
            color: black;
        }
        .table td {
            font-weight: bold;
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
        .header{
         position:absolute;
         left:0;
         top:0;
         padding-top:10px;
         background: rgba(98, 98, 98, 0.5);
        }
        .header-foot{
         position:absolute;
         left:0;
         top:300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body" id="imageHtml" style="position:relative;left:50%; transform:translate(-50%); width:760px; height:1080px;background-image:url({{ asset('images/background/ramadan/ramadan1.jpg') }}); background-size:cover;">
                <div class="w-100 header">
                     @if(isset($company->logo))
                       <div class="row justify-content-center">
                        <div class="logo d-flex justify-content-center">
                         <img src="{{ asset($company->logo) }}" />
                        </div>
                       </div>
                      @endif
                  <div  class="row justify-content-center mt-2">
                   <div>
                    <h2 class="text-white p-0 m-0"><strong>{{ $company->company_name }}</strong></h2>
                    <p class="text-center text-white p-0 m-0">{{ $company->address }}</p>
                   </div>
                  </div>
                </div>
                <div class="w-100 header-foot" style="">
                 <div class="row justify-content-end">
                   <div class="text-white" style="padding:0px 25px;">
                    <p align="right">
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
                <div class="row" style="position:absolute; top:410px;">
                    <div class="col-md-12 d-flex">
                        <div>
                            <h4 class="text-white text-center title">First 10 Days</h4>
                            <table id="table1" class="table table-bordered table-striped m-2"></table>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div>
                            <h4 class="text-white text-center title">Second 10 Days</h4>
                            <table id="table2" class="table table-bordered table-striped m-2"></table>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex">
                        <div>
                            <h4 class="text-white text-center title">Third 10 Days</h4>
                            <table id="table3" class="table table-bordered table-striped m-2"></table>
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
                <thead>
                    <tr>
                        <th style="width:100px;">Ramadan</th>
                        <th>Date</th>
                        <th>Day</th>
                        <th>Sehri</th>
                        <th>Iftar</th>
                    </tr>
                </thead>
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
                    link.download = "ramadan_timetable.png";
                    link.click();
                });
            });

    }
    document.addEventListener("DOMContentLoaded", initializeTimetable);
    </script>
</body>
</html>