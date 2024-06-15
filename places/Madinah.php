<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Madinah</title>
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
    <img src="Madinah.jpg" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">Medina played a pivotal role in the emergence and spread of Islam. Muslims migrated to it in the first year of the Hijra, and it was dated from there according to the Islamic Hijri calendar. It contains the Prophet’s Mosque, the second of the Two Holy Mosques after the Grand Mosque. It was built by the Messenger Muhammad (may God’s prayers and peace be upon him) and his companions and resided next to it. It is the last of the mosques of the prophets. The Noble Rawdah is located in it, which is an area estimated at 330 square meters between the house of the Prophet (may God’s prayers and peace be upon him) and his pulpit. . The Prophet’s Mosque has witnessed several expansions throughout its history, the largest of which was the Saudi expansion, until it now accommodates about one million worshipers.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      للمدينة المنورة دور محوريّ في ظهور الإسلام وانتشاره، هاجر إليها المسلمون في السنة الأولى للهجرة، ومنها أُرّخ بالتقويم الهجري الإسلامي. فيها المسجد النبوي الشريف ثاني الحرمين الشريفين بعد المسجد الحرام، بناه الرسول محمد (صلى الله عليه وسلم) وصحابته وأقام بجواره، وهو آخر مساجد الأنبياء، تقع فيه الروضة الشريفة، وهي مساحة تقدر بـ 330 م2 بين بيت النبي (صلى الله عليه وسلم) ومنبره. شهد المسجد النبوي توسعات عدة على مدار تاريخه، كان أكبرها التوسعات السعودية، حتى أصبح يستوعب الآن نحو مليون مصلٍ.
    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en"><br>Love soup
<br>Cedars of Medina
<br>Samosa pie
<br>Lahouh</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      
<br>شوربة الحب 
<br>الأرز المديني 
<br>فطيرة السمبوسك
<br>لحوح

    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Women<br>
One of the traditional costumes for women in the Medina region is the "Kurta", which is a garment that covers the body from the neck to the feet and has long sleeves to the palms. Its colors and the quality of its fabric vary, and the colors in this garment are determined according to the age of the person wearing it, as it is common for older women to wear colored clothes. Al-Fatih. As for young girls, they wear the ball gown made of silk and in bright colors. The ball gown is worn on visits and occasions.
<br>Men <br>
The turban, the dress, the waistcoat, the belt, and the shawl. The traditional style of dress was: a white or colored dress with a belt wrapped in the middle, then the waistcoat was placed over it, a turban was wrapped around the head, and a shawl was sometimes placed on the shoulder. Clothes were usually woven from linen or cotton. It has medium-sized pockets to hold some things, such as money and rosaries.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      النساء<br>
من الأزياء التقليدية للمرأة في منطقة المدينة المنورة: "الكرتة"، وهو ثوب يغطي الجسم من العنق إلى القدمين وأكمام طويلة إلى الكفين، تختلف ألوانه ونوعية قماشه، وتُحدد الألوان في هذا اللباس نسبةً إلى سنِّ من تلبسه، إذ عُرف عند النساء كبيرات السن لبس اللون الفاتح، أما الصغيرات فيلبسن الكرتة المصنوعة من الحرير وتكون بألوانزاهية، والكرتة تُلبس في الزيارات والمناسبات.
<br>الرجال <br>
العمامة، والثوب، والصديرية، والحزام، والشال، وكان النمط التقليدي في اللباس هو: الثوب الأبيض أو الملون وفي الوسط يُلف حزام، ثم تُوضع فوقه الصديرية، ويلف حول الرأس عمامة، وعلى الكتف يوضع أحيانًا الشال، وعادةً تُنسج الثياب من الكتان أو القطن، وبها جيوب متوسطة الحجم لحمل بعض الأشياء، كالنقود والسبحة.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Quba Mosque
<br>Bir Athq
<br>Mount Uhud
<br>Anbasa Palace and Ibn Mah Fort
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    
<br>مسجد قباء
<br>بئر عذق
<br>جبل أحد
<br>قصر عنبسة، وحصن ابن ماه

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
