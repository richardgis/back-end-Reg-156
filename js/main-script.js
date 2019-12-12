// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var qualifications = document.querySelectorAll(".qualification");
var e_fname = document.querySelectorAll(".e_fname");
// var e_lname = document.querySelectorAll(".e_lname");
var e_qual = document.querySelectorAll(".e_qual");

var eName = [];
var eQual = [];

var Quals = [];

for (let i = 0; i < e_fname.length; i++) {
    const fname = e_fname[i].innerHTML;
    // const lname = e_lname[i].innerHTML;
    const eqln = e_qual[i].innerHTML;
    eName.push(fname);
    eQual.push(eqln);
}
console.log(eName, eQual);
for (let i = 0; i < qualifications.length; i++) {
    const qual = qualifications[i];
    Quals.push(qual.innerHTML);
}
console.log(Quals);

var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        xLabels: eName,//['Emeka','Glory','Esoso','Emeka','Emeka','Emeka'],//["Mar 1", "Mar 2", "Mar 3", "Mar 4", "Mar 5", "Mar 6", "Mar 7", "Mar 8", "Mar 9", "Mar 10", "Mar 11", "Mar 12", "Mar 13"],
        yLabels: Quals,//['NCE','PHD','BSc','BSc','BSc','FSLC'],
        datasets: [{
            label: 'Qualification',
            lineTension: 0.3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 50,
            pointBorderWidth: 2,
            data: eQual//['NCE','FSLC','FSLC','FSLC','FSLC','FSLC']//[10000, 30162, 26263, 18394, 18287, 28682, 31274, 33259, 25849, 24159, 32651, 31984, 38451],
        }],
    },
    options: {
        scales: {
            xAxes: [{
                time: {
                    unit: 'date'
                },
                gridLines: {
                    display: false
                },
                // ticks: {
                //   // maxTicksLimit: 7
                // }
            }],
            yAxes: [{
                type: "category",
                ticks: {
                    min: "PHD",
                    max: "Others",
                    maxTicksLimit: 13
                },
                gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                }
            }],
        },
        legend: {
            display: false
        }
    }
});
