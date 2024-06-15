<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jouf</title>
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
  border-image-source: url('northern.jpg');
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
    <img src="Jouf.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The history of the Al-Jawf region dates back from the beginning of human settlement until the modern peaceful era, and evidence of this is the rich diversity, such as Zaabal Castle, Sirar Well, Al-Rajajeel, Muisin Palace, Al-Tawir, and a group of rock inscriptions in the city of Sakaka, Marid Castle, Omar bin Al-Khattab Mosque, Al-Dara’ neighborhood, and the site of Al-Tahikum in the Dumat Al-Jandal Governorate. , Kaf Palace and Jabal Al-Saidi, and the modern Emirate Palace in Qurayyat Governorate.
 
The House of Saud annexed the region within the Kingdom of Saudi Arabia: <br>
Thursday, Shawwal 14, 1431 AH, the day on which His Majesty King Abdulaziz bin Abdul Rahman Al Saud, may he rest in peace, gathered together the fragments of this great entity and transformed division and rivalry into a blessed and blessed unity, fusion and integration in an epic that demonstrates the genius of the pioneer of monotheism, who planted a seed that his honorable sons from After him, he was able to establish a legitimate ruling system that occupied justice on his list of priorities, and he built on the principles of the Holy Qur’an and the pure Sunnah of the Prophet, the reference for all Muslims.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      ويعود تاريخ منطقة الجوف منذ بداية الستيطان البشري وحتى العصر السلمي الحديث, ودللة على ذلك الواقع الثرية التنوعة مثل قلعة زعبل وبئر سيرار والرجاجيل وقصر مويسن والطوير ومجموعة من النقوش الصخرية في مدينة سكاكا, وقلعة مارد ومسجد عمر بن الخطاب وحي الدرع وموقعة التحيكم في محافظة دومة الجندل, وقصر كاف وجبل الصعيدي, وقصر إمارة الحديثة في محافظة القريات.
 <br>
ضم ال سعود المنطقة ضمن الملكة العربية السعودية <br>
الخميس 14 شوال 1431هـ ذلك اليوم الذي قام فيه جللة الملك عبد العزيز بن عبد الرحمن آل سعود طيب ال ثراه بجمع شتات هذا الكيان العظيم وأحال الفرقة والتناحر إلى وحدة مباركا ً طيبا وانصهار وتكامل في ملحمة تدل على عبقرية رائد التوحيد الذي غرس غرسا تعهده أبناؤه الكرام من بعده واستطاع أن يؤسس نظام حكم شرعي احتل العدل قائمة أولوياته وبني مبادئ القرآن الكريم والسنة النبوية الطهرة مرجع كل المسلمين.

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Popular dishes in the well-known Al-Jawf region, such as jareesh, marqooq, grape leaves, kabsa, pastries, and maqshoosh bread.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      الأكلات الشعبية في منطقة الجوف المعروفة، كالجريش والمرقوق وورق العنب والكبسة والمعجنات وخبز المقشوش.
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Men's fashion in Al-Jawf region:<br>
Popular men's fashion in the Al-Jawf region reflects the official Saudi dress for men in most regions of Saudi Arabia, which in its entirety consists of the shemagh and iqal, the ghutra and the iqal, and the saya or daqla.<br>
One of the women's fashions worn in the Al-Jawf region, especially in the desert, is the "mhuthil", which is a long garment. It gained its name from "the thal", meaning folding the garment in the waist area, and connecting it with a belt woven from red or black cotton or wool threads. Women in Al-Jawf also wear the zibun (daghla), which is an open-fronted outfit, from the neck to the foot, and the upper part of the neck is closed to the middle with buttons made of the same fabric. Young girls wear the red sheila, in addition to the "al-Muqaruna", which is A large black handkerchief, folded in half; To be in the shape of a triangle, and wrapped around the head, as well as the "shambar", which is a cover about half a meter wide, and may exceed three meters in length, and its color is black, leaving about six cm (or as desired), with red bands on both ends, and tied " The “shambar” is a folded handkerchief over the forehead and head, and the “shambar” is raised from the front until it covers the chin. It is a garment reserved for wealthy women, as is the “shambar,” which is a loosely woven cloth that is wrapped around the head.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      ازياء الرجال في منطقة الجوف <br>:
تعكس الأزياء الرجالية الشعبية في منطقة الجوف الزي السعودي الرسمي للرجال في معظم مناطق السعودية وهو في مجمله يتكون من الشماغ والعقال، والغترة والعقال، الصاية أو الدقلة.
من الأزياء النسائية التي تُرتدى في منطقة الجوف، خصوصًا في البادية، "المحوثل"، وهو ثوب طويل، اكتسب اسمه من "الحثل"، أي ثني الثوب في منطقة الخصر، ويربط بحزام منسوج من القطن الأحمر، أو الأسود، أو خيوط الصوف. كما ترتدي المرأة في الجوف الزبون (الدقلة)، وهو عبارة عن زي مفتوح من الأمام، من الرقبة حتى القدم، ويغلق الجزء العلوي من الرقبة حتى المنتصف بواسطة أزرار مصنوعة من القماش نفسه، وترتدي الفتيات الصغيرات الشيلة الحمراء، بالإضافة إلى "المقرونة"، وهي منديل كبير أسود، يُطوى من وسطه؛ ليكون على شكل مثلث، ويلف على الرأس، وكذلك "الشمبر"، وهو غطاء عرضه نحو نصف متر، وقد يزيد طوله على ثلاثة أمتار، ولونه أسود، ويترك نحو ستة سم (أو على حسب الرغبة)، لتكون أشرطة حمراء على الطرفين، ويربط "الشمبر" بمنديل مطوي بالجبهة والرأس، ويرفع "الشمبر" من الأمام إلى أن يغطي الذقن، وهو لباس خاص بالنساء الثريات، وكذلك "العصابة"، وهو قماش منسوج على قدر من الرخاوة، يلف على الرأس.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
Zaabal Castle - Bir Sirar and Al-Rajajeel - Muisin Palace and Al-Tawir - Marid Castle - Omar bin Al-Khattab Mosque - Kaf Palace - Mount Saidi
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    قلعة زعبل -بئر سيرار والرجاجيل -قصر مويسن والطوير -قلعة مارد -مسجد عمر بن الخطاب -قصر كاف -جبل الصعيدي
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
