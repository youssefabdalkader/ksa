<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Northern Region</title>
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
    <img src="NorthernRegion.jpg" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The northern borders were called (Aalj Sands), and were also previously known as the Al-Muhanna Valleys, and for short (Al-Wadis), while the western parts of them were called (Al-Hammad). It is important to note that the name (Al-Hammad) and the name (Al-Wadis) are given to the entire region out of dominance in many cases. Writings. Some modern geographical maps still call this region the names (Wadis) and (Al-Hammad), in addition to the name of the northern border.
The importance of the northern border region has gradually emerged in the contemporary history of the Kingdom since an early time, and was evident in its restoration with the restoration of the Hail region and its neighboring areas to the north, up to the borders of Iraq, in the period 1340-1341 AH / 1921-1922 AD.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      كانت الحدود الشمالية تسمى (رمال عالج) كما عرفت سابقًا أيضًا بـ وديان المهنا واختصارًا (الوديان) في حين يطلق على الأجزاء الغربية منها (الحماد) ومن المهم ملاحظة أن اسم (الحماد) واسم (الوديان يطلقان على كل المنطقة من باب التغليب في كثير من الكتابات كما أن بعض الخرائط الجغرافية الحديثة لا تزال تطلق على هذه المنطقة اسمي (الوديان) و (الحماد) إضافة إلى اسم الحدود الشمالية
وقد برزت تدريجيًا أهمية منطقة الحدود الشمالية في تاريخ المملكة المعاصر منذ وقت مبكر، ظهر في استعادتها مع استعادة منطقة حائل وما يجاورها شمالاً حتى حدود العراق وذلك في الفترة 1340 - 1341هـ / 1921 - 1922م

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">One of the dishes that the northern region is famous for is called (Al-Malehi), and it consists of natural ingredients in the environment of the northern Kingdom of Saudi Arabia, as its residents and people are famous for raising sheep and goats, the meat of which is used to prepare and prepare their own meals.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      من الأكلات التي تشتهر بها المنطقة الشمالية وتسمى (بالمليحي)، وهي تتكون من مكونات طبيعية في بيئة شمال المملكة العربية السعودية، إذ يشتهر سكانها وأهلها بتربية الأغنام والماعز التي يستفاد من لحومها لإعداد و تحضير وجبات الطعام الخاصة بهم.
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Men's folk costumes in the northern borders <br>
Men's fashions in the northern border region are similar to the fashions that appeared in most regions of the Kingdom, as the regular dress is known in the region with its sleeves that reach the palm of the hand, and is wide at the bottom in order to facilitate movement and running, and the "Morden" dress, which is characterized by long, wide sleeves called " "Ardan", and some of them use it nowadays in celebrations and performances.
Women's fashions varied between ornamental clothing and the usual clothing that was used daily. Women were usually the ones who made their own costumes. Among the most prominent women's clothing in the northern border region were the maqta', theater, and karta dresses. The "maqta" is known as a long dress, and is characterized by simplicity when worn. For older people, it is more like a regular dress, while girls wear a sectional dress decorated and embroidered on the chest and sleeves.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      الأزياء الشعبية الرجالية في الحدود الشمالية
<br>تتشابه الأزياء الرجالية في منطقة الحدود الشمالية مع الأزياء التي ظهرت في أغلب مناطق المملكة، إذ عُرف في المنطقة الثوب العادي بأكمامه التي تصل لحد كف اليد، ويكون متسعًا في أسفله حتى يُسهل الحركة والركض، والثوب "المرودن" الذي يتصف بالأكمام الطويلة الواسعة التي تسمى "الأردان"، ويستخدمه بعضهم في وقتنا الحالي في الاحتفالات والعرضات.
تنوعت أزياء المرأة بين لباس الزينة واللباس المُعتاد الذي يُستخدم يوميًا، وكانت النساء -عادة- هن من يصنعن أزياءهن الخاصة بهن، ومن أبرز ملابس المرأة في منطقة الحدود الشمالية: ثياب المقطع والمسرح والكرتة، ويُعرف "المقطع" بأنه ثوب طويل، وتغلب عليه البساطة عند كبار السن، ويكون أشبه بالثوب العادي، أما الفتيات فيرتدين ثوب المقطع المُزيّن والمطرّز على الصدر والأكمام.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
Historical village of Zabala, Doqra archaeological site - Flags of Darb Zubaida - King Abdulaziz Palace in Lina
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    قرية زبالا التاريخية، موقع دوقرة الأثري-أعلام درب زبيدة -قصر الملك عبدالعزيز في لينة
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
