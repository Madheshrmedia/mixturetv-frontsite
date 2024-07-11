<style>
    .emblem {
        width: 20px;
        height: 20px;
        margin-right: 8px;
        vertical-align: middle;
    }

    .th-title {
        color: white !important;
    }

    .intro {
        background-image: url("./image/sportapi-bg.png");
        background-size: 100%;
        background-repeat: no-repeat;
    }

    html,
    body,
    .intro {
        height: 100%;
    }

    table td,
    table th {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    thead th {
        color: #fff;
    }

    .card {
        border-radius: .5rem;
    }

    .table-scroll {
        border-radius: .5rem;
    }

    .table {
        background: antiquewhite;
    }

    .table-scroll table thead th {
        font-size: 16px;
    }

    thead {
        top: 0;
        position: sticky;
    }
</style>

<section class="intro mt-4">
    <div class="bg-image h-100 sportapi-bg">
        <div class="mask d-flex align-items-center h-100">
            <div class="container-fluid ">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 m-4">
                                <h4 class="text-center my-3" style="color:white ">Football Score</h4>
                                <div class="table-responsive table-scroll " data-mdb-perfect-scrollbar="true"
                                    style="position: relative; height: 250px">

                                    <table class="table table-striped table-hover">
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