@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ asset('styles/welcome.css') }}">
@endsection

@section('title')
Sacred Artel
@endsection

@section('content')
<header class="d-flex align-items-center justify-content-center flex-column">
    <img src="{{ asset('imgs/welcome/logo.jpg') }}" alt="">
    <span>He who lives under the roof of the Almighty rests under the shadow of the Almighty</span>
    <a href="https://discord.gg/FUjeMe4D4X" target="_blank" class="btn btn-outline-primary">Join the ranks</a>
</header>
<div class="content">
    <div class="description d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex flex-row justify-content-around align-items-center">
            <div class="description_title_dash"></div>
                <span id="description_title">עשרת הדיברות של אלוהים</span>
            <div class="description_title_dash"></div>
        </div>
        <div class="description_block">
            <div class="d-flex flex-column">
                <div class="description_block_language d-flex justify-content-around">
                    <span id="en" active>En</span>
                    <span id="he">He</span>
                </div>
                <div class="description_block_text_container" id="en-text">
                    <span class="description_block_title">The Commandments of God</span>
                    <span class="description_block_text">1. "I am the Lord your God, and there are no other gods besides Me." </span>
                    <span class="description_block_text">2. "Do not create for yourself an idol or any image; do not worship them or serve them."</span>
                    <span class="description_block_text">3. "Do not pronounce the name of the Lord your God in vain; for the Lord will not leave anyone without punishment who uses His name in vain." </span>
                    <span class="description_block_text">4. "Six days you shall work and do all your work, and the seventh— the Sabbath — is a day of rest, which you shall dedicate to the Lord your God." </span>
                    <span class="description_block_text">5. "Honor your father and mother, may you be blessed on earth and long-lived." </span>
                    <span class="description_block_text">6. "Thou shalt not kill." </span>
                    <span class="description_block_text">7. "Do not commit adultery." </span>
                    <span class="description_block_text">8. "Don't steal."</span>
                    <span class="description_block_text">9. "Do not perjure yourself." </span>
                    <span class="description_block_text">10. "Don't wish for anything else."</span>
                </div>
                <div class="description_block_text_container" id="he-text">
                    <span class="description_block_title">מצוות האל</span>
                    <span class="description_block_text">1. "אני ה' אלוהיך, ואין אלים אחרים מלבדי." </span>
                    <span class="description_block_text">2. "אל תעשה לעצמך אליל ושום דימוי; אל תעבד אותם ואל תשרת אותם." </span>
                    <span class="description_block_text">3. "אל תאמר את שם יהוה אלהיך לשווא; כי יהוה לא יעזוב ללא עונש את מי שמשתמש בשמו לשווא." </span>
                    <span class="description_block_text">4. "שישה ימים עבדו ועשו את כל מעשיכם, והשביעי-שבת - הוא יום מנוחה אשר הקדיש לה' אלהיך." </span>
                    <span class="description_block_text">5. "כבד את אביך ואת אמך, ברוך עלי אדמות ואריכות ימים." </span>
                    <span class="description_block_text">6. "אל תהרוג."</span>
                    <span class="description_block_text">7. "אל תנאף."</span>
                    <span class="description_block_text">8. "אל תגנוב." </span>
                    <span class="description_block_text">9. "אל תעיד שקר." </span>
                    <span class="description_block_text">10. "אל תאחל לשום דבר זר."</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('#he-text').hide();
</script>
<script src="{{ asset('scripts/welcome/script.js') }}"></script>
@endsection