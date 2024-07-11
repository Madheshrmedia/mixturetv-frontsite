<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Rankings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .emblem {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .th-title {
            color: white;
        }
    </style>
</head>

<body>
    <section class="intro">
        <div class="bg-image h-100" style="background-color: #f5f7fa;">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                        style="position: relative; height: 700px">
                                        <table class="table table-striped mb-0">
                                            <thead style="background-color: #002d72;">
                                                <tr>
                                                    <th scope="col" class="th-title">Rank</th>
                                                    <th scope="col" class="th-title">Team Name</th>
                                                    <th scope="col" class="th-title">Points</th>
                                                    <th scope="col" class="th-title">Matches</th>
                                                    <th scope="col" class="th-title">Wins</th>
                                                    <th scope="col" class="th-title">Draws</th>
                                                    <th scope="col" class="th-title">Losses</th>
                                                    <th scope="col" class="th-title">Goals Scored</th>
                                                    <th scope="col" class="th-title">Goals Conceded</th>
                                                </tr>
                                            </thead>
                                            <tbody id="rankingsTableBody">
                                                <!-- Table rows will be inserted here by JavaScript -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        const url = 'https://sports-live-scores.p.rapidapi.com/football/rankings/33';
        const options = {
            method: 'GET',
            headers: {
                'x-rapidapi-key': 'ddf8fe729dmsh907ba724f631e30p190a2djsn568a7a883fce',
                'x-rapidapi-host': 'sports-live-scores.p.rapidapi.com'
            }
        };

        async function fetchData() {
            try {
                const response = await fetch(url, options);
                const result = await response.json();
                updateRankingsTable(result.rankings);
            } catch (error) {
                console.error(error);
            }
        }

        function updateRankingsTable(rankings) {
            const rankingsTableBody = document.getElementById('rankingsTableBody');
            let htmlContent = '';

            rankings.forEach(rank => {
                htmlContent += `
                    <tr>
                        <td>${rank.Rank}</td>
                        <td>${rank['Team Name']}</td>
                        <td>${rank.Points}</td>
                        <td>${rank.Matches}</td>
                        <td>${rank.Wins}</td>
                        <td>${rank.Draws}</td>
                        <td>${rank.Losses}</td>
                        <td>${rank['Goals Scored']}</td>
                        <td>${rank['Goals Conceded']}</td>
                    </tr>
                `;
            });

            rankingsTableBody.innerHTML = htmlContent;
        }

        // Call the async function
        fetchData();
    </script>
</body>

</html>