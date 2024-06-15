<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hail</title>
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
    <img src="Hail.png" alt="City Landscape">
  </div>

  <div class="section" id="history">
    <h2 lang="en">History</h2>
    <p lang="en">The city of Hail entered Saudi rule in all three stages. Since the establishment of the first Saudi state and after the unification of parts of Najd, Hail joined early Saudi rule in 1163 AH / 1749 AD, and remained until the end of its rule. Then the second Saudi state was founded by Imam Turki bin Abdullah. Al Saud 1240 AH / 1825 AD, and two years after its founding, Hail was among the cities that took the initiative to send a delegation of residents to Riyadh to pledge allegiance to Imam Turki bin Abdullah and enter under the banner of the Second Saudi State. After the establishment of the Kingdom of Saudi Arabia by King Abdulaziz bin Abdulrahman Al Saud, he initially tried to annex Hail to his rule. That period witnessed battles on the outskirts of the city with the “Al Rashid” princes of Hail at the time, which ended with a peace treaty between the two parties, but it was later annulled. King Abdulaziz had no choice but to confront the Al Rashid army, so he sent forces to Hail that besieged it for two months, until it surrendered and joined his rule, in the early 1340 AH/1922 AD.</p>
    <h2 lang="ar" style="display: none;">التاريخ</h2>

    <p lang="ar" style="display: none;">
      دخلت مدينة حائل في الحكم السعودي في جميع أطواره الثلاثة، فمنذ تأسيس الدولة السعودية الأولى وبعد توحيد أجزاء نجد، انضمت حائل في وقت مبكر إلى الحكم السعودي في 1163هـ/ 1749م، وبقيت حتى انتهاء حكمها، ثم تأسست الدولة السعودية الثانية على يد الإمام تركي بن عبدالله آل سعود 1240هـ/ 1825م، وبعد عامين من تأسيسها كانت حائل من ضمن المدن التي بادرت بإرسال وفد من الأهالي إلى الرياض لتقديم البيعة للإمام تركي بن عبدالله والدخول تحت لواء الدولة السعودية الثانية. وبعد تأسيس المملكة العربية السعودية على يد الملك عبدالعزيز بن عبدالرحمن آل سعود، حاول في بدء الأمر ضم حائل إلى حكمه وشهدت تلك الفترة معارك على أطراف المدينة مع "آل رشيد" أمراء حائل آنذاك، انتهت بعقد صلح بين الطرفين، لكن نُقض بعد ذلك، فما كان من الملك عبدالعزيز إلا مواجهة جيش آل رشيد، فأرسل إلى حائل قوات حاصرتها لمدة شهرين، حتى استسلمت وانضمت إلى حكمه، في مطلع 1340هـ/ 1922م.


    </p>

  </div>

  <div class="section" id="food">
    <h2 lang="en">Food</h2>
    <p lang="en">Jarish, harees, matazeez, marqooq, kobaba, hanini, wild ghee, porridge, crusty loaves of bread, porridge and cream.</p>
    <h2 lang="ar" style="display: none;">الأكل</h2>
    
    <p lang="ar" style="display: none;">
      الجريش، الهريس، المطازيز، المرقوق، الكبيبا، الحنيني، السمن البري، الثريد، الرغفان المقشوش، والعصيدة والقشدة
    </p>

  </div>

  <div class="section" id="dressing">
    <h2 lang="en">Dressing</h2>

    <p lang="en">
    Men<br>
Men wear a wide, long-sleeved, fur-colored thobe, which resembles a bisht, but is lined from the inside with fur made of sheep’s wool.
They cover their heads with a red shawl made of cotton fabric similar to a shemagh, and the bidi cloak is also known, which is a short and sturdy cloak that men can wrap themselves in while they sleep.
<br>
Women<br>
Women in Hail wore a long-sleeved, decorated dress that covered the entire body. It was common for older women to wear light colors of this dress, while younger women wore bright colors.
When leaving the house, the woman wore a long abaya starting above the head, black in color and open in the front, and covering her face with the ghatta, which is a black cloth that resembles a burqa but without openings where the eyes are.
    </p>

    <h2 lang="ar" style="display: none;">الملابس</h2>

    <p lang="ar" style="display: none;">
      رجال<br>
ويرتدي الرجال ثوباً واسعاً، بأكمام طويلة، بلون الفرو، يشبه البشت، ولكنه مبطن من الداخل بفراء مصنوع من صوف الأغنام.
ويغطون رؤوسهم بشال أحمر مصنوع من قماش قطني يشبه الشماغ، وتعرف أيضاً عباءة البيدي، وهي عباءة قصيرة ومتينة يمكن للرجال أن يلفوا أنفسهم بها أثناء نومهم.
<ر>
النساء<br>
وارتدت النساء في حائل فستاناً مزيناً بأكمام طويلة يغطي الجسم كله. وكان من الشائع أن ترتدي النساء الأكبر سناً الألوان الفاتحة من هذا الفستان، بينما ترتدي النساء الأصغر سناً الألوان الزاهية.
وكانت المرأة عند خروجها من المنزل ترتدي عباءة طويلة تبدأ من فوق الرأس، سوداء اللون ومفتوحة من الأمام، وتغطي وجهها بالغطة، وهي قطعة قماش سوداء تشبه البرقع ولكن دون فتحات في مكان العينين.
    </p>

  </div>

  <div class="section" id="antiquities">
    <h2 lang="en">ِAntiquities</h2>
    <p lang="en">
<br>Jabal Aja and Salma
<br>Qashla Palace
<br>Aaref Castle
<br>Hail Regional Museum
    </p>

    <h2 lang="ar" style="display: none;">الآثار </h2>
    <p lang="ar" style="display: none;">
    <br>جبلا أجا وسلمى 
<br>قصر القشلة 
<br>قلعة أعيرف
<br>متحف حائل الإقليمي 

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
