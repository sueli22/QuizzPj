// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["မန်နေဂျာ", "လက်ထောက်မန်နေဂျာ", "အမှုထမ်း","အစောင့်"],
    datasets: [{
      data: [6.66, 6.66,80.02,6.66],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#FF0000'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#FF0000'],
      hoverBorderColor: "#006400",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#006400",
      borderColor: '#006400',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
