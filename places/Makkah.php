<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Makkah</title>
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #d4ae46;
    color: #5a4e4d;
    line-height: 1.6;
  }
  .main {
 /* Define transparent borders for all sides except the right to maintain the box model */
  border-top: 0 solid transparent;
  border-right: 75px solid transparent; /* Adjust the width as needed */
  border-bottom: 0 solid transparent;
  border-left: 0 solid transparent;

  /* Apply the border image only to the right side */
  border-image-source: url('weast.jpg');
  border-image-slice: 30; /* Adjust the slice value as needed */
  border-image-width: 75px; /* The width of the border image */
  border-image-outset: 0;
  border-image-repeat: none;
}

  .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
    overflow: hidden;
  }
  .header {
    background: #5c3a03;
    color: #fff;
    padding: 20px 0;
    text-align: center;
  }
  .language-switcher {
    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 1000;
  }
  .language-switcher button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    background-color: #f7ecd;
    color: #5a4e4d;
  }
  .section {
    background: #fff;
    margin: 20px 0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .section h2 {
    border-bottom: 2px solid #c9a87c;
    padding-bottom: 10px;
    margin-bottom: 20px;
    color: #8a7f7c;
  }
  .city-photo img {
    width: 100%;
    height: auto;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  select {
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
  }
  /* Add styles for Arabic content */
  [lang="ar"] {
    font-family: 'Arial', sans-serif;
    display: none;
  }
  /* Style adjustments for RTL layout */
  body[dir="rtl"] {
    text-align: right;
  }
  body[dir="rtl"] .section h2 {
    text-align: right;
  }
  body[dir="rtl"] .language-switcher {
    left: 10px;
    right: auto;
  }
 .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #f1f1f1}

  .menu-icon {
    cursor: pointer;
    width: 30px;
    height: 30px;
    background-image: url('menu.png');
    background-size: cover;
    background-repeat: no-repeat;
  }


.container select {
  padding: 10px 45px 10px 20px; /* Adjust padding to make space for the icon */
  border: 2px solid #c9a87c; /* Historical accent color */
  border-radius: 5px;
  appearance: none; /* Remove default arrow */
  -webkit-appearance: none;
  -moz-appearance: none;
  background-color: #f8f8f8;
  cursor: pointer;
  font-size: 16px;
  width: 100%; /* Ensure dropdown fills container */
  box-shadow: 0 2px 5px rgba(0,0,0,0.2); /* Soft shadow for depth */
}



/* Adjustments for hover effect */
.container select:hover {
  border-color: #a67c52; /* Darker shade for interaction */
}

/* Adjustments when the dropdown is focused */
.container select:focus {
  outline: none;
  border-color: #a67c52; /* Consistent with hover state */
}

</style>
</head>
<body class="main">

<div class="language-switcher">
  <button onclick="switchLanguage('en')">English</button>
  <button onclick="switchLanguage('ar')">العربية</button>
</div>

<div class="container">
  <div class="dropdown">
    <div class="menu-icon" onclick="toggleDropdown()"></div>
    <div id="dropdown-content" class="dropdown-content">
      <a href="#history" onclick="showSection('history')">History<br></a>
      <a href="#food" onclick="showSection('food')">Food</a><br>
      <a href="#dressing" onclick="showSection('dressing')">Dressing</a><br>
      <a href="#archaeology" onclick="showSection('antiquities')">Antiquities</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="city-photo">
    <img src="Makkah.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">King Abdulaziz’s first since he assumed power and entered Mecca in 1343 AH / 1925 AD <br>

Expansions in the Saudi era:<br>

The Saudi expansion of the Grand Mosque is the beginning of the expansion projects of the Grand Mosque that have been halted for more than ten centuries, and it is considered the greatest in history. The Saudi state’s interest in the Grand Mosque began through the directives of the founding King Abdulaziz bin Abdul Rahman Al Saud in 1344 AH / 1925 AD, with the expansion of the Grand Mosque, and continued during the reign of his sons, the kings, in three major expansions.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      أولى الملك عبد العزيز منذ توليه الحكم ودخوله مكة المكرمة عام 1343هـ / 1925م
<br>
التوسعات في العهد السعودي:
<br>
تعد التوسعة السعودية للمسجد الحرام بداية مشاريع توسعة الحرم التي توقفت لأكثر من عشرة قرون، وتعد الأعظم عبر التاريخ. بدأ اهتمام الدولة السعودية بالحرم من خلال توجيهات الملك المؤسس عبدالعزيزبن عبد الرحمن آل سعود عام 1344هـ / 1925م، بتوسعة المسجد الحرام، واستمرت في عهد أبنائه الملوك في ثلاث توسعات كبرى

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Grish <br>Sleek <br>Freekeh <br>Maasoub</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      جريش <br>سليق  <br> الفريك <br> المعصوب 
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Popular costumes in the Makkah Al-Mukarramah region are the traditional costumes that represent the traditional clothing styles of men and women in the Makkah Al-Mukarramah region in the Kingdom of Saudi Arabia. They reflect the cultural diversity that the region has experienced over the decades, and most of them are linked to the ways of living, occasions and celebrations in the region, and their shapes and designs are numerous.
<br>
Popular men's fashion in the Makkah region: the thobe.
<br>
The waistcoat. Keffiyeh.
<br>
Al-Marwadun or Al-Mazliq..
<br>
Women's folk costumes in the Makkah region - Sadiri.
<br>
Handrail.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      الأزياء الشعبية في منطقة مكة المكرمة، هي الأزياء التراثية التي تمثل أنماط اللباس التقليدية للرجل والمرأة في منطقة مكة المكرمة بالمملكة العربية السعودية، وتعكس التنوع الثقافي الذي عاشته المنطقة على مدى عقود كما يرتبط معظمها بأساليب المعيشة والمناسبات والاحتفالات في المنطقة، وتعددت أشكالها وتصاميمها.
<br>
الأزياء الشعبية الرجالية في منطقة مكة المكرمة الثوب.
<br>
الصديري . الكوفية.
<br>
المرودن أو المذولق..
<br>
الأزياء الشعبية النسائية في منطقة مكة المكرمة صديري.
<br>
الدرابزون.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Asfan Castle
<br>Ain Zubaida
<br>Wadi Fatima
<br>Historic mosques
<br> Al-Bayaa Mosque, Al-Jinn Mosque, Aisha “Al-Tanaim” Mosque, and Al-Jabah Mosque.
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    <br>قلعة عسفان
<br>عين زبيدة
<br>وادي فاطمة
<br>المساجد التاريخية
<br> مسجد البيعة، ومسجد الجن، ومسجد عائشة "التنعيم"، ومسجد الإجابة.

    </p>
  
  </div>

</div>
<script>
  function switchLanguage(lang) {
  // Set the direction and language of the document body
  document.body.dir = lang === 'ar' ? 'rtl' : 'ltr';
  document.body.lang = lang;

  // Select all elements with 'lang="ar"' and toggle their display
  var arabicElements = document.querySelectorAll('[lang="ar"]');
  for (var i = 0; i < arabicElements.length; i++) {
    arabicElements[i].style.display = lang === 'ar' ? 'block' : 'none';
  }

  // Select all elements with 'lang="en"' and toggle their display
  var englishElements = document.querySelectorAll('[lang="en"]');
  for (var i = 0; i < englishElements.length; i++) {
    englishElements[i].style.display = lang === 'en' ? 'block' : 'none';
  }
}

    function showSection(section) {
    var sections = document.querySelectorAll('.section, .city-photo');
    sections.forEach(function(sec) {
      sec.style.display = 'none'; // Hide all sections initially
    });
    if (section === 'all') {
      sections.forEach(function(sec) {
        sec.style.display = 'block'; // Show all sections
      });
    } else {
      document.getElementById(section).style.display = 'block'; // Show the selected section
    }
  }
  function toggleDropdown() {
  var dropdown = document.getElementById('dropdown-content');
  dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

function showSection(sectionId) {
  // Hide all sections
  var sections = document.getElementsByClassName('section');
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = 'none';
  }
  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}
</script>

</body>
</html>
