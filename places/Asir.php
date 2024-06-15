<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Asir</title>
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
    <img src="Asir.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The beginning of the political history of Asir goes back to the middle of the thirteenth century AH and the nineteenth century AD, and we do not deny the mention of its name in early Islamic sources. The Yemeni scholar Al-Mahdani mentioned it as the ancient province of Jerash (modern Asir) <br>
Also, Abha is considered the capital of Asir and was immersed until the early third century AH and the nineteenth century AD</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      تعود بداية التاريخ عسير السياسي إلى منتصف القرن الثالث عشر هجري والتاسع عشر ميلادي ولا ننكر ورود اسمها في المصادر الإسلامية المبكرة فقد اوردها العلامة اليمني المهداني على أنها إقليم جرش قديما(عسير حديثاً) <br>
‏كما كما أن أبها تعد عاصمة عسير وهي مغمرة حتى أوائل القرن الثالث هجري و التاسع عشر ميلادي

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">The Asir region has a rich and interesting cultural heritage and is famous for a variety of delicious popular dishes, including: <br>
1- Al-Hanith 2- Al-Areika 3- Al-Tasa’a 4- Al-Mashgoutha 5- Al-Miva Bread</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      تتمتع منطقة عسير بالتراث ثقافي غني ومتعة وتشتهر بمجموعة متنوعة من الأطباق الشعبية اللذيذة ومنها : <br>
١-الحنيذ ٢-العريكه ٣ التصابيع ٤- المشغوثه ٥-خبز الميفا

    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    The Asiri dress is distinguished by its multi-colored decorations, shapes, and dense embroidery. It is a witness to a unique heritage icon that the ancestors and ancestors excelled at weaving and which was passed down through the generations to carry within it the title of sophistication, authenticity, and nobility.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
       الزي العسيري زي مميز بالزخارف المتعددة الألوان والأشكال والتطريز الكثيف وهو شاهد على أيقونة تراثية فريدة برع الأجداد والأسلاف في حياكتها وتناقلتها الأجيال لتحمل في طياتها عنوان الرقي والأصالة والعراقة.
    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
Heritage tourism places in the Asir region: <br>
The Asir region is a region endowed with unique natural beauty and includes many exciting tourist places such as:
<br>
Rijal Al Maa Village: It is considered one of the beautiful mountains of Asir, famous for its picturesque natural scenery and beautiful traditional houses.
<br>Asir National Museum: It is located in the city of Abha and displays a collection of historical and cultural heritage pieces dating back to the history of the region.
<br>Palace of Islamic Civilizations: Located in Al-Namas Governorate, it includes the civilizations of the Islamic world and the events and facts it holds, so that the palace remains a witness to those civilizations and their memories remain eternal for future generations.
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    الأماكن السياحة التراثية بمنطقة عسير: <br>
‏منطقة عسير هي منطقة تتمتع بجمال طبيعة فريد وتتضمن العديد من الأماكن السياحية المثيرة مثل:
‏<br>
قرية رجال المع : تعتبر واحدة من قراء جبال عسير الجميلة تشتهر بمناظره الطبيعية الخلابة والمنازل التقليدية الجميلة.
‏<br>متحف عسير الوطني : يقع في مدينة أبها ويعرض مجموعة من القطع التاريخية والثقافية التراثية التي تعود إلى تاريخ المنطقة.
<br>قصر الحضارات الإسلامية :يقع في محافظة النماص يضم حضارات العالم الإسلامي وما يحمله من أحداث ووقائع ليبقى القصر شاهدا على تلك الحضارات ولتظل ذكراها خالدة للأجيال القادمة.

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
