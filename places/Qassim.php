<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Qassim</title>
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
  border-image-source: url('center.jpg');
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
    height: 60%;
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
    <img src="Qassim.jpg" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The Qassim region in the Kingdom of Saudi Arabia is distinguished by the diversity of its culture and heritage, as well as the diversity of its popular cuisine, which reflects the nature and history of this region.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      تتميز منطقة القصيم في المملكة العربية السعودية بتنوع ثقافتها وتراثها، كما تتميز بتنوع أكلاتها الشعبية التي تعكس طبيعة هذه المنطقة وتاريخها.
    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Matazeez: It is a dish made of thin dough mixed with meat, chicken, or vegetables and cooked on low heat.
<br> Marqooq: It is a dish of dough cut into thin slices and cooked with meat, chicken, or vegetables.
<br> Qursan: It is a thin, circular loaf of bread baked in the oven.
<br> Almarasee Tannour: These are discs of dough baked in the tannour oven.
<br> Al-Hanini: It is a dish made of wheat ears, flour, ghee and dates.
<br> Kleija: These are discs of dough stuffed with eggs, honey or sugar.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      المطازيز: وهي طبق من عجينة رقيقة تُخلط باللحم أو الدجاج أو الخضار وتُطبخ على ڼار هادئة.
<br> المرقوق: وهو طبق من العجينة المقطعة إلى شرائح رفيعة تُطبخ مع اللحم أو الدجاج أو الخضار.
<br> القرصان: وهو رغيف خبز دائري رقيق يُخبز في فرن التنور.
<br> المراصيع تنور: وهي أقراص من العجين تُخبز في فرن التنور.
<br> الحنيني: وهو طبق من سنابل القمح والطحين والسمنة والتمر.
<br> الكليجة: وهي أقراص من العجين المحشوة بالبيض والعسل أو السكر.

    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    The men's thobe in Qassim in the past was dominated by a simple design. It was made of light or heavy cotton and wool fabric, depending on the hot or cold climate. It had spherical buttons and wide pockets. <br>
In addition to the regular dress, there was another garment called the Marwadun, which was a garment with long, loose sleeves. It was called the Marwadun due to the capacity of its sleeves. That is, its sleeves, and the quality of its fabric is light and transparent, and it is usually worn on special occasions over regular clothing, especially when performing the ritual ritual for the region.
Women in the Qassim region wear a wide and light "mashla", usually over a regular dress, and it comes in two colours: dark red and black. They also put the abaya over the dress, which is made of heavy black wool and is known as a broadcloth.
<br>The abaya is usually made of two pieces of black cloth that are woman’s length, sewn together, so that the shape of the abaya becomes rectangular and placed on the head. It is open in the front, and in the local dialect of the region it is called “abaya.”
<br>Among the fashions with which a woman covers her head and face: the shaila, which is made of light cotton, its length ranges between two and three meters, and its color is black. It is also called: the ghadafa, as well as the burqa, which covers the face and opens where the eyes are, and has a separator made of fabric.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      غلب على الثوب الرجالي في القصيم قديمًا التصميم البسيط، وكان يُصنع من قماش خفيف أو ثقيل من القطن والصوف، وذلك حسب الأجواء الحارة أو الباردة، وله أزرار بشكل كروي وجيوب واسعة. <br>
وعُرف إلى جانب الثوب العادي ثوب آخر يُطلق عليه المرودن، وهو ثوبٌ أكمامه طويلة وفضفاضة، وسمي المرودن لسعة أردانه؛ أي أكمامه، ونوعية قماشه خفيفة وشفافة، ويُلبس عادةً في المناسبات فوق الثوب العادي، خاصة عند أداء العَرضة الخاصة بالمنطقة.
المرأة في منطقة القصيم تلبس "المشلل" الواسع والخفيف، فوق الثوب العادي عادةً، ومنه لونان: أحمر غامق، وأسود، وتضع العباءة فوق الثوب، وهي مصنعة من الصوف الثقيل الأسود ويُعرف بالجوخ.
<br>وعادةً تُصنع العباءة من قطعتي قماش أسود بطول المرأة، تُخاطان ببعضهما، ليصبح شكل العباءة مستطيلًا وتوضع على الرأس، وهي مفتوحة من الأمام، ويُطلق عليها باللهجة المحلية للمنطقة "عباة".
<br>ومن الأزياء التي تُغطي بها المرأة رأسها ووجهها: الشيلة التي تُصنع من القطن الخفيف، ويتراوح طولها بين مترين وثلاثة أمتار، ولونها أسود، ويقال لها أيضًا: الغدفة، وكذلك البرقع الذي يستر الوجه ويُفتح من مكان العينين، وله فاصل من قماش

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Shuaib Al-Adgham
<br>Antarah Palace and Rock
<br>The historic town in Oyoun Al-Jawa
<br>Al-Mousakif Market
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    <br>شعيب الأدغم 
<br>قصر و صخرة عنتره 
<br>البلدة التاريخية في عيون الجواء
<br>سوق المسوكف

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
