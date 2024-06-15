<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tabuk</title>
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
    <img src="Tabuk.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The Tabuk region is bordered to the north by the State of Jordan, to the east by Al-Jawf and Hail, to the south by Medina, and to the west by the Gulf of Aqaba and the Red Sea, while five of its governorates are located on the Red Sea coast, namely the governorates of Haql, Duba, Al-Wajh, Umluj, and Al-Bada’. The Nafud Dunes are the distinctive character of Taima Governorate, and one of the most prominent nicknames of the region. Tabuk Al-Ward" and "Gateway to the North"
<br>Tourism in the Tabuk region:<br>
Tourism in the Tabuk region, northwest of the Kingdom of Saudi Arabia, is based on heritage tourism, and it occupies an important position, due to its historical importance and the multiplicity of tourist places there. The Tabuk region also combines diverse geographical components, including sea, plain, mountains, ruins, and moderate climate throughout the year.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      يحد منطقة تبوك شمالا دولة الأردن ومن الشرق الجوف وحائل ومن الجنوب المدينة المنورة ومن الغرب خليج العقبة والبحر الأحمر، فيما تقع خمس من محافظاتها على ساحل البحر الأحمر وهي محافظات حقل وضباء والوجه وأملج والبدع، وتعد كثبان النفود الطابع المميز لمحافظة تيماء، ومن أبرز ألقاب المنطقة تبوك الورد"، و"بوابة الشمال"
<br>السياحة في منطقة تبوك:
<br>ترتكز السياحة في منطقة تبوك شمال غرب المملكة العربية السعودية على السياحة التراثية، وتحتل مكانة مهمة، نظرًا لأهميتها التاريخية وتعدد الأماكن السياحية فيها. كما تجمع منطقة تبوك مقومات جغرافية متنوعة بين بحر وسهل وجبل وآثار، وأجواء معتدلة على مدار العام.

    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Fattah has several names, including “al-Majalla” and “Khamee’ah,” which is bread that is placed directly in the coals and after it is leveled, rubbed, and immediately poured with wild ghee, Al-Mafraqa, and Jarish.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      للفتة عدة أسماء منها "المجلة " و" الخميعة " وهو خبز يوضع مباشرة في الجمر وبعد تسويته وفركه وسكبه على الفور بالسمن البري، المفرقة، جريش
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    For men <br>
A regular dress that is wide at the bottom to facilitate movement and running, and the sleeves reach the length of the palm of the hand.
The cap made of cloth lined with cotton is placed on the head, then it is topped with a shemagh or ghutra, also made of cotton, and then the black headband. On special occasions and holidays, the jubba and bisht are added to the dress as they are considered decorative fashions. In the winter, the coat is worn over the dress and its length is to the knee or waist.
   <br>
For Women<br>
The dress is considered one of the most prominent women's fashions in the Tabuk region. It is a long dress that covers the entire body and has long sleeves. Its colors vary according to the age of the woman. Older women wear light-coloured dresses, while young girls wear bright colours. The bra is worn in the upper area of the body, and is open. The front has golden buttons, and pants are worn with it, which are made of dark-colored or black striped cotton fabric.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;"><br>
      الرجال <br>
الثوب العادي الذي يكون متسعًا في أسفله لتسهيل الحركة والركض، والأكمام تصل إلى حد كف اليد.
<br>توضع على الرأس الطاقية المصنوعة من قماش مبطن بالقطن، ثم يعلوها الشماغ أو الغترة وخامتها أيضًا القطن، وبعد ذلك العقال الأسود، وفي المناسبات والأعياد تضاف الجبة والبشت إلى اللباس باعتبارها من أزياء الزينة. أما في فصل الشتاء فيُلبس المعطف فوق الثوب ويكون طوله إلى الركبة أو الوسط.
   <br><br>
النساء 
<br>يُعد الفستان من أبرز أزياء المرأة في منطقة تبوك، وهو ثوب طويل يغطي كامل الجسد وأكمامه طويلة، وتختلف ألوانه حسب سن المرأة، إذ تلبس كبيرات السن الثوب من الألوان الفاتحة، أما الصغيرات فيلبسن الألوان الزاهية.وتلبس الصديرية في المنطقة العلوية من الجسد، وتكون مفتوحة من الأمام وتحتوي على أزرار ذهبية، ويُلبس معها السروال، الذي يُصنع من القماش القطني المخطط بالألوان الداكنة أو اللون الأسود.

    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Tabuk Castle
<br>Al Hamra Palace
<br>The old city walls
<br>Bir Haddaj
<br>Al-Radm Palace
<br>Al-Bajidi Palace
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    
<br>قلعة تبوك
<br>قصر الحمرا
<br>أسوار المدينه القديمة 
<br>بئر هداج 
<br>قصر الرضم
<br>قصر البجيدي

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
