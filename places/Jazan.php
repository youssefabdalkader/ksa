<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jazan</title>
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
    <img src="Jazan.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The history of the city of Jazan goes back to the Stone Ages, and this is confirmed by studies and archaeological research in the region that showed that the first human settlement was in the lower Paleolithic era, as tools dating back to the era of the Assyrian civilization were found, and survey dramas also showed that the Red Sea coast region is considered one of The best sources of information about the Acheulian era, during the era of the restoration of the founding king, King Abdulaziz bin Abdulrahman Al Saud, ruled Riyadh and established the Kingdom of Saudi Arabia. King Abdulaziz led unification campaigns throughout the Arabian Peninsula, and the Jazan and Tihama Asir region, southwest of the Arabian Peninsula, in that period were subject to... For a local leadership under the rule of one of its “Idrisid” families, and the Mecca Institutes were concluded between the founding King and its ruler, Hassan Al-Idrissi, on Rabi’ Al-Akhir 14, 1345 and October 21, 1926 AD, according to which that country would remain under the protection of King Abdulaziz, and it was so for four years until the treaty was broken by The Idrisid rulers reported a rule in 1349 AH/1930 AD, so Jazan was the last region of the Arabian Peninsula to join Saudi rule.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      يرجع تاريخ مدينة جازان إلى العصور الحجريّة، وتؤكد ذالك الدراسات و البحوث الأثريه في المنطقه التي أظهرت ان أول استيطان بشري كان في العصر الحجري القديم الأسفل ،اذ عُثر على ادوات تعود إلى عصر الحضارة الآشورية، كما ظهرت الدراميات المسحية ان منطقة ساحل البحر الأحمر تُعد من أفضل مصادر المعلومات عن عصر الآشولي، بعهد استرداد الملك المؤسس الملك عبدالعزيز بن عبدالرحمن ال سعود حكم الرياض و تأسيس المملكه العربيه السعوديه ،قاد الملك عبدالعزيز حملات التوحيد في أنحاء شبة الجزيره العربيه ،وكانت منطقة جازان و تهامة عسير جنوب غربي الجزيره العربية في تلك الفتره تخضع لزعامة محلية تحت حكم احدى عائلاتها "الادارسة " ، وعُقدة معاهد مكه المكرمه بين الملك الملك المؤسس وحاكمها الحسن الادريسي في 14 ربيع الاخر 1345 و 21 اكتوبر 1926م، بموجبها تبقى تلك البلاد تحت حماية الملك عبدالعزيز ،وكانت كذلك لمدة أربعة أعوام حتى نُقضت المعاهدة من قبل الحكام الادارسة عن حكم في 1349هـ/1930م ،فكانت جازان آخر مناطق الجزيره العربية انضماماً إلى الحكم السعودي.
    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Hamis meat (stuffed)
<br>Al-Jizaniyya anchorage
<br>Fish Sanuna
<br>Mafhas</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      حميس اللحم (المحشوش)
<br>المرسه الجيزانية 
<br>صانونة سمك 
<br>مفحس

    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    The traditional men's dress in the Jazan region consisted of three pieces: the izar, the shamiz, and the turban. The shamiz is a fabric wrapped around the middle and a belt is placed on it. As for the shamiz, it is a long-sleeved shirt open in the front and decorated with ornaments and has many colors and shapes. The general public wears a raw sarong. The triangle, its shape differs in the urban areas of the region from the desert, and some elderly people in the region still wear and maintain these popular costumes.
<br>The hand-embroidered “karta” dress was a popular women’s garment in the Jazan region, and long striped pants were worn underneath it. There is another type of “karta” woven from cotton and not embroidered.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      كان لباس الرجال التقليدي في منطقة جازان مكونًا من ثلاث قطع، هي: الإزار والشميز والعمامة، والإزار قماش يُلف حول الوسط ويوضع عليه حزام، أما الشميز فهو قميص ذو أكمام طويلة مفتوح من الأمام ومزيّن بزخارف وله ألوان وأشكال عدة، ويلبس عموم الناس إزارًا من الخام المثلوث، ويختلف شكله في حواضر المنطقة عن البادية، وما زال بعض كبار السن في المنطقة يرتدون هذه الأزياء الشعبية ويحافظون عليها.
<br>كان لباس "الكرتة" المطرّز يدويًّا من ألبسة المرأة المشهورة في منطقة جازان، ويُلبس تحته سروال طويل مقلّم، وللكرتة نوع آخر منسوج من القطن وغير مطرّز.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
Antiquities / Al-Dosariyya Castle / in the center of Jazan city, as well as the site of / Upper Jazan / close to the ruler of Abu Throne, which was mentioned in the events of the fourth century AH, and traces of its buildings and walls are still clearly visible to this day, in addition to / Al-Manara / located between the towns of Al-Rayyan and Al-Kawamlah in the Jazan Valley, which It dates back to the sixth century AH.
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    الأثار / قلعة الدوسرية / وسط مدينة جازان وكذلك موقع / جازان العليا / على مقربة من حاكمة أبي عرش والتي ذكرت في أحداث القرن الرابع الهجري ولا تزال آثار مبانيها وأسوارها ماثلة للعيان حتى اليوم إلى جانب / المنارة / الواقعة بين بلدتي الريان والكواملة في وادي جازان والتي يعود تاريخا إلى القرن السادس الهجري .
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
