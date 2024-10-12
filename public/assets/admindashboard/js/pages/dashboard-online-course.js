// Total Course Chart
const totalCourseOption = {
  series: [
    {
      name: "Course",
      data: [5, 30, 10, 25, 11, 30, 15, 28, 33],
    },
  ],
  chart: {
    type: "area",
    height: 50,
    sparkline: {
      enabled: true,
    },
    zoom: {
      autoScaleYaxis: true,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  colors: ["#795DED"],
  stroke: {
    width: 1.2,
    curve: "smooth",
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return "";
        },
      },
    },
    marker: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.5,
      opacityTo: 0.2,
      stops: [0, 60],
    },
  },
};
const totalCourseChart = new ApexCharts(
  document.querySelector("#total-course-chart"),
  totalCourseOption
);
totalCourseChart.render();

// Total Instructor Chart
const totalInstructorOption = {
  series: [
    {
      name: "Instructor",
      data: [33, 28, 15, 30, 11, 25, 10, 30, 5],
    },
  ],
  chart: {
    type: "area",
    height: 50,
    sparkline: {
      enabled: true,
    },
    zoom: {
      autoScaleYaxis: true,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  colors: ["#FF4626"],
  stroke: {
    width: 1.2,
    curve: "smooth",
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return "";
        },
      },
    },
    marker: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.5,
      opacityTo: 0.2,
      stops: [0, 60],
    },
  },
};
const totalInstructorChart = new ApexCharts(
  document.querySelector("#total-instructor-chart"),
  totalInstructorOption
);
totalInstructorChart.render();

// Total Instructor Chart
const totalStudentOption = {
  series: [
    {
      name: "Instructor",
      data: [5, 30, 10, 25, 11, 30, 15, 28, 33],
    },
  ],
  chart: {
    type: "area",
    height: 50,
    sparkline: {
      enabled: true,
    },
    zoom: {
      autoScaleYaxis: true,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  colors: ["#76D466"],
  stroke: {
    width: 1.2,
    curve: "smooth",
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return "";
        },
      },
    },
    marker: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.5,
      opacityTo: 0.2,
      stops: [0, 60],
    },
  },
};
const totalStudentChart = new ApexCharts(
  document.querySelector("#total-student-chart"),
  totalStudentOption
);
totalStudentChart.render();

// Total Enroll Chart
const totalEnrollOption = {
  series: [
    {
      name: "Course",
      data: [5, 30, 10, 25, 11, 30, 15, 28, 33],
    },
  ],
  chart: {
    type: "area",
    height: 50,
    sparkline: {
      enabled: true,
    },
    zoom: {
      autoScaleYaxis: true,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  colors: ["#795DED"],
  stroke: {
    width: 1.2,
    curve: "smooth",
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
    y: {
      title: {
        formatter: function (seriesName) {
          return "";
        },
      },
    },
    marker: {
      show: false,
    },
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.5,
      opacityTo: 0.2,
      stops: [0, 60],
    },
  },
};
const totalEnrollChart = new ApexCharts(
  document.querySelector("#total-enroll-chart"),
  totalEnrollOption
);
totalEnrollChart.render();

const averageCourseSellingOption = {
  series: [
     {
      name: "Total Transactions",
      data: [90, 100,90, 150, 100, 90, 110, 90, 100, 110, 130, 130],
    },
    {
      name: "Regular Transactions",
      data: [60, 80, 72, 50, 80, 60, 50, 70, 85, 75, 60, 70],
    },
    {
      name: "Failed Transactions",
      data: [20, 10, 30, 25, 30, 15, 25, 15, 10, 20, 25, 30],
    },
  ],
  chart: {
    type: "bar",
    height: "360",
    offsetX: -10,
    offsetY: 20,
    toolbar: {
      show: false,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "40%",
    },
  },
  dataLabels: {
    enabled: false,
  },
  grid: {
    borderColor: "#EEE",
    strokeDashArray: 5,
  },
  stroke: {
    show: false,
  },
  xaxis: {
    categories: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  yaxis: {
    min: 5,
    max: 90,
    tickAmount: 5,
    labels: {
      formatter: (val) => val + "k",
    },
  },
  fill: {
    colors: ["#76D466", "#795ded", "#ff5001"],
    opacity: 1,
  },
  legend: {
    position: "top",
    horizontalAlign: "left",
    offsetX: -30,
    offsetY: 0,
    markers: {
    width: 7,
    height: 7,
    radius: 99,
    fillColors: ["#76D466", "#795ded", "#ff5001"],
    offsetX: -3,
    offsetY: -1,
    },
    itemMargin: {
      horizontal: 20,
    },
  },
  tooltip: {
    y: {
      formatter: (val) => {
        return val + "k";
      },
    },
  },
};

const averageCourseSellingChart = new ApexCharts(
  document.querySelector("#average-course-selling-chart"),
  averageCourseSellingOption
);
averageCourseSellingChart.render();

// Learn Activity Chart
const learnActivityOption = {
  chart: {
    type: "area",
    height: 340,
    offsetX: -10,
    offsetY: 20,
    toolbar: {
      show: false,
    },
    events: {
      mounted: (chart) => {
        chart.windowResizeHandler();
      },
    },
  },
  xaxis: {
    categories: [
      "Design",
      "Marketing",
      "Business",
      "Web Dev.",
      "Film & Video",
      "Productivity",
      "Craft",
    ],
  },
  yaxis: {
    min: 0,
    max: 30,
    tickAmount: 6,
    labels: {
      formatter: (val) => val + "h",
    },
  },
  series: [
    {
      name: "Paid Course",
      data: [5, 20, 10, 25, 10, 30, 10],
    },
    {
      name: "Free Course",
      data: [0, 25, 5, 20, 2, 25, 5],
    },
  ],
  grid: {
    borderColor: "#EEE",
    strokeDashArray: 5,
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "smooth",
    colors: ["#795DED", "#76D466"],
    width: 2,
  },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.4,
      opacityTo: 0.15,
      stops: [0, 60],
    },
  },
  legend: {
    position: "top",
    horizontalAlign: "left",
    offsetX: -30,
    offsetY: 0,
    markers: {
      width: 7,
      height: 7,
      radius: 99,
      fillColors: ["#795DED", "#76D466"],
      offsetX: -3,
      offsetY: -1,
    },
    itemMargin: {
      horizontal: 20,
    },
  },
  tooltip: {
    followCursor: true,
    y: {
      formatter: (val) => {
        return val + "h";
      },
    },
  },
};

const learnActivityChart = new ApexCharts(
  document.querySelector("#learn-activity-chart"),
  learnActivityOption
);
learnActivityChart.render();
