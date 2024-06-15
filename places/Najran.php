<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Najran</title>
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
  border-image-source: url('south.jpg');
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
    <img src="Najran.jpg" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">Najran is one of the ancient human settlement areas in the Arabian Peninsula, as its lands were home to many ancient peoples, who inhabited the region since
Thousands of years ago, this is evidenced by rock engravings in the Hima area, a World Heritage Site registered with UNESCO.
Which includes a large group of
Reliefs depicting animal hunting, and the lifestyles of a culture that extended...
7 thousand years,</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      تعد نجران إحدى مناطق الاستقرار البشري القديمة في الجزيرة العربية، إذ كانت أراضيها موطنًا للعديد من الشعوب القديمة، التي سكنت المنطقة منذ
آلاف السنين، دلّ على ذلك النقوش الصخرية في منطقة حمى إحدى مواقع التراث العالمي المسجلة لدى اليونسكو،
والتي تتضمن مجموعة كبيرة من
النقوش التي تصو ِّّر صيد الحيوانات، وأساليب الحياة لثقافة امتدت نحو
7 آلاف عام،

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Mottling <br>
Delegation and broth
<br>Al-Mardoufah
<br>Al-Hamisa
<br>Nashufa</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      الرقش <br>
الوفد والمرق
<br>المرضوفة 
<br>الحميسه 
<br>النشوفة 

    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Women's fashions varied in the past according to age, financial ability, material, and level of embroidery, including the traditional dress for married women, which is a black embroidered dress with wide hands called the "mammak", and the woman covers her head with "thread," which is a large group of threads wrapped around the head and decorated with rings of... Silver.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      لأزياء المرأة فتنوعت في الماضي حسب العمر والقدرة المالية والخامة ومستوى التطريز، ومنها الزي التقليدي للنساء المتزوجات، وهو ثوب أسود مطرز واسع اليدين يسمى "المكمم"، وتغطي المرأة رأسها "بالخيط"، وهو عبارة عن مجموعة كبيرة من الخيوط تُلف حول الرأس ويُزيّن بحلقات من الفضة. 
    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Shuaib Nadfa
<br>groove
<br>The ancient castle of Raum
<br>The historic Al-Aan Palace
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    <br>شعيب دحضة
<br>الأخدود
<br>قلعة رعوم الأثرية
<br>قصر العان التاريخي

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
