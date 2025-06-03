@extends('layout.app')
@section('content')
    <div class="language-selector">
        <a id="lang-nyz" class="active" onclick="changeLanguage('nyz')">Kinyamwezi</a> | 
        <a id="lang-sw" onclick="changeLanguage('sw')">Kiswahili</a> | 
        <a id="lang-en" onclick="changeLanguage('en')">English</a>
    </div>
    
    <header>
        <h1 id="title">Eneo Letu</h1>
        <p id="subtitle">Chuo cha St. John's University - Dodoma, Tanzania</p>
    </header>
    
    <div class="location-info">
        <h2 id="location-title">Eneo Letu</h2>
        <p id="location-desc">Chuo kipo mjini Dodoma, mkoani Dodoma, Tanzania.kikuyu.</p>
        
        <h3 id="directions-title">Njia ya Kufika</h3>
        <p id="directions-desc">Kutoka shule ya msingi mazengo, pinda kulia na uende mita mia moja. Utakuta chuo chetu upande wa kulia.</p>
        
        <h3 id="hours-title">Saa za Ufunguzi</h3>
        <ul id="hours-list">
            <li>Jumatatu - Ijumaa: 08:00 asubuhi - 05:00 jioni</li>
            <li>Jumamosi: 09:00 asubuhi - 02:00 mchana</li>
            <li>Jumapili: Imefungwa</li>
        </ul>
    </div>
    
    <div class="map-container">
        <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.9825999999997!2d32.8137!3d-5.0169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMDEnMDAuOCJTIDMywrA0OCc0OS4zIkU!5e0!3m2!1sen!2stz!4v1620000000000!5m2!1sen!2stz"></iframe>
    </div>
    
    <div class="contact-info">
        <h2 id="contact-title">Mawasiliano</h2>
        <p><strong id="address-label">Anwani:</strong> S.L.P 123, Dodoma, Tanzania</p>
        <p><strong id="phone-label">Simu:</strong> +255 123 456 789</p>
        <p><strong id="email-label">Barua pepe:</strong> info@SJUTDev.ac.tz</p>
        <p><strong id="manager-label">Msimamizi:</strong> Bwana John Mwita (0755 123 456)</p>
    </div>
    
    <footer>
        <p id="copyright">&copy; 2025 Developers-Sjut. Haki zote zimehifadhiwa.</p>
    </footer>

    <script>
        // Kamusi za lugha
        const translations = {
            nyz: {
                title: "Eneo Letu",
                subtitle: "Shule ya Kinyamwezi - Tabora, Tanzania",
                locationTitle: "Eneo Letu",
                locationDesc: "Shule ya Kinyamwezi ipo mjini Tabora, mkoani Tabora, Tanzania. Tuko karibu na soko kuu la Tabora na jengo la serikali.",
                directionsTitle: "Njia ya Kufika",
                directionsDesc: "Kutoka daraja kuu la Tabora, pinda kulia na uende mita mia moja. Utakuta shule yetu upande wa kulia.",
                hoursTitle: "Saa za Ufunguzi",
                hoursItems: [
                    "Jumatatu - Ijumaa: 08:00 asubuhi - 05:00 jioni",
                    "Jumamosi: 09:00 asubuhi - 02:00 mchana",
                    "Jumapili: Imefungwa"
                ],
                contactTitle: "Mawasiliano",
                addressLabel: "Anwani:",
                phoneLabel: "Simu:",
                emailLabel: "Barua pepe:",
                managerLabel: "Msimamizi:",
                copyright: "&copy; 2023 Shule ya Kinyamwezi. Haki zote zimehifadhiwa."
            },
            sw: {
                title: "Eneo Letu",
                subtitle: "Shule ya Kinyamwezi - Tabora, Tanzania",
                locationTitle: "Eneo Letu",
                locationDesc: "Shule ya Kinyamwezi ipo mjini Tabora, mkoani Tabora, Tanzania. Tuko karibu na soko kuu la Tabora na jengo la serikali.",
                directionsTitle: "Njia ya Kufika",
                directionsDesc: "Kutoka daraja kuu la Tabora, pinda kulia na uende mita mia moja. Utakuta shule yetu upande wa kulia.",
                hoursTitle: "Saa za Ufunguzi",
                hoursItems: [
                    "Jumatatu - Ijumaa: 08:00 asubuhi - 05:00 jioni",
                    "Jumamosi: 09:00 asubuhi - 02:00 mchana",
                    "Jumapili: Imefungwa"
                ],
                contactTitle: "Mawasiliano",
                addressLabel: "Anwani:",
                phoneLabel: "Simu:",
                emailLabel: "Barua pepe:",
                managerLabel: "Meneja:",
                copyright: "&copy; 2023 Shule ya Kinyamwezi. Haki zote zimehifadhiwa."
            },
            en: {
                title: "Our Location",
                subtitle: "Kinyamwezi School - Tabora, Tanzania",
                locationTitle: "Our Location",
                locationDesc: "Kinyamwezi School is located in Tabora city, Tabora region, Tanzania. We are close to Tabora's main market and the government building.",
                directionsTitle: "How to Get Here",
                directionsDesc: "From Tabora's main bridge, turn right and go about 100 meters. You will find our school on the right side.",
                hoursTitle: "Opening Hours",
                hoursItems: [
                    "Monday - Friday: 08:00 AM - 05:00 PM",
                    "Saturday: 09:00 AM - 02:00 PM",
                    "Sunday: Closed"
                ],
                contactTitle: "Contact Information",
                addressLabel: "Address:",
                phoneLabel: "Phone:",
                emailLabel: "Email:",
                managerLabel: "Manager:",
                copyright: "&copy; 2023 Kinyamwezi School. All rights reserved."
            }
        };

        // Kubadilisha lugha
        function changeLanguage(lang) {
            // Kubadilisha active class kwenye viungo vya lugha
            document.querySelectorAll('.language-selector a').forEach(a => {
                a.classList.remove('active');
            });
            document.getElementById(`lang-${lang}`).classList.add('active');
            
            // Kupata tafsiri za lugha
            const t = translations[lang];
            
            // Kubadilisha maudhui ya ukurasa
            document.getElementById('title').textContent = t.title;
            document.getElementById('subtitle').textContent = t.subtitle;
            document.getElementById('location-title').textContent = t.locationTitle;
            document.getElementById('location-desc').textContent = t.locationDesc;
            document.getElementById('directions-title').textContent = t.directionsTitle;
            document.getElementById('directions-desc').textContent = t.directionsDesc;
            document.getElementById('hours-title').textContent = t.hoursTitle;
            
            const hoursList = document.getElementById('hours-list');
            hoursList.innerHTML = '';
            t.hoursItems.forEach(item => {
                const li = document.createElement('li');
                li.textContent = item;
                hoursList.appendChild(li);
            });
            
            document.getElementById('contact-title').textContent = t.contactTitle;
            document.getElementById('address-label').textContent = t.addressLabel;
            document.getElementById('phone-label').textContent = t.phoneLabel;
            document.getElementById('email-label').textContent = t.emailLabel;
            document.getElementById('manager-label').textContent = t.managerLabel;
            document.getElementById('copyright').innerHTML = t.copyright;
            
            // Kubadilisha lugha ya HTML
            document.documentElement.lang = lang;
        }

        // Chagua lugha ya kwanza kulingana na lugha ya browser
        const userLang = navigator.language.substring(0, 2);
        if (userLang === 'sw') {
            changeLanguage('sw');
        } else if (userLang === 'en') {
            changeLanguage('en');
        } else {
            changeLanguage('nyz');
        }
    </script>
@endsection