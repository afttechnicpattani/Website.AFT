<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <!-- บังคับ Viewport ให้หน้าจอกว้าง 1280px เสมอ เพื่อให้มือถือซูมออกและเห็นเป็นหน้าคอม -->
  <meta name="viewport" content="width=1280">
  <meta http-equiv="X-Content-Type-Options" content="nosniff">
  <title>องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย วท.ปัตตานี</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600;700;800&family=Sarabun:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* ---------------- Reset & Base ---------------- */
    * { box-sizing: border-box; }
    body, html { margin: 0; padding: 0; width: 100%; height: 100%; font-family: 'Sarabun', sans-serif; background-color: #f4f6f9; min-width: 1280px; overflow-x: auto; }
    .container { width: 1140px !important; max-width: 1140px !important; margin: 0 auto; }
    .prompt-font { font-family: 'Prompt', sans-serif; }

    /* ---------------- Splash Screen ---------------- */
    #splash-screen { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #2c2c2c; display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 9999; color: #D4AF37; text-align: center; transition: opacity 1s ease-out, visibility 1s; min-width: 1280px; }
    #splash-screen img { max-width: 90%; max-height: 60vh; object-fit: contain; margin-bottom: 20px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
    .loader-bar { width: 250px; height: 4px; background: #444; border-radius: 4px; margin-top: 20px; overflow: hidden; }
    .loader-progress { width: 0%; height: 100%; background: linear-gradient(90deg, #D4AF37, #FFF2CD); animation: load 5s linear forwards; }
    @keyframes load { 100% { width: 100%; } }

    /* ---------------- Top Bar ---------------- */
    .topbar { background-color: #7a0000; color: white; display: flex; justify-content: space-between; align-items: center; padding: 10px 40px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); }
    .topbar-left { display: flex; align-items: center; gap: 15px; font-weight: 700; font-size: 1.2rem; }
    .topbar-left img { width: 45px; height: 45px; border-radius: 50%; background: white; padding: 3px; box-shadow: 0 2px 5px rgba(0,0,0,0.2); }

    /* ---------------- Hero Section ---------------- */
    .hero-section { position: relative; background: linear-gradient(to bottom, rgba(139, 0, 0, 0.85), rgba(100, 0, 0, 0.95)), url('https://lh5.googleusercontent.com/d/1RvtVAFhaMfQqQ_-ZHEBw9JNz1erCxKhS') center/cover no-repeat fixed; padding: 50px 20px 80px 20px; color: white; text-align: center; border-bottom: 5px solid #D4AF37; }
    .hero-logos-container { display: flex; justify-content: center; align-items: center; gap: 25px; margin-bottom: 25px; }
    .hero-logo-main { width: 120px; height: 120px; object-fit: contain; background: white; border-radius: 50%; padding: 8px; border: 4px solid #D4AF37; box-shadow: 0 0 25px rgba(212, 175, 55, 0.5); }
    .hero-logo-secondary { width: auto; height: 120px; object-fit: contain; background: white; border-radius: 15px; padding: 10px; border: 4px solid #D4AF37; box-shadow: 0 0 25px rgba(212, 175, 55, 0.5); }
    .hero-title { font-weight: 700; color: #ffffff; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); font-size: 2.2rem; margin-bottom: 5px; }
    .hero-subtitle { font-weight: 500; font-size: 1.6rem; color: #FBF5B7; letter-spacing: 1px; text-shadow: 1px 1px 3px rgba(0,0,0,0.5); margin-bottom: 15px; }

    /* ---------------- Main Navigation Tabs ---------------- */
    .main-nav-container { display: flex; justify-content: center; margin-top: -25px; position: relative; z-index: 20; }
    .main-nav-tabs { background: white; padding: 8px; border-radius: 50px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); display: inline-flex; gap: 5px; border: 1px solid #eaeaea; }
    .main-nav-btn { border: none; background: transparent; padding: 12px 30px; border-radius: 40px; font-family: 'Prompt', sans-serif; font-weight: 600; font-size: 1.05rem; color: #666; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; gap: 10px; }
    .main-nav-btn:hover { color: #8B0000; background: #fdf8eb; }
    .main-nav-btn.active { background: linear-gradient(135deg, #8B0000 0%, #5c0000 100%); color: white; box-shadow: 0 4px 15px rgba(139, 0, 0, 0.3); }

    /* ---------------- Shared Content Area ---------------- */
    .content-area { padding-top: 40px; padding-bottom: 60px; }
    .section-title { color: #8B0000; font-weight: 700; font-size: 1.8rem; }
    .section-subtitle { color: #5c0000; font-weight: 600; font-size: 1.4rem; }
    .divider { display: flex; align-items: center; justify-content: center; gap: 20px; margin: 15px 0; }
    .divider .line { height: 2px; width: 60px; background-color: #D4AF37; }
    .divider i { color: #D4AF37; font-size: 1.2rem; }

    /* ---------------- Philosophy Card ---------------- */
    .philosophy-card { background: linear-gradient(135deg, #8B0000 0%, #5c0000 100%); border-radius: 20px; padding: 50px 40px; color: white; text-align: center; position: relative; box-shadow: 0 15px 35px rgba(139, 0, 0, 0.2); overflow: hidden; margin-top: 20px; margin-bottom: 50px; }
    .philosophy-card::before { content: "\f10d"; font-family: "Font Awesome 6 Free"; font-weight: 900; position: absolute; top: -10px; left: 30px; font-size: 10rem; color: rgba(255, 255, 255, 0.05); pointer-events: none; }
    .philosophy-card::after { content: ""; position: absolute; bottom: -50px; right: -50px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(212,175,55,0.15) 0%, rgba(212,175,55,0) 70%); border-radius: 50%; pointer-events: none; }
    .philosophy-title { color: #D4AF37; font-family: 'Prompt', sans-serif; font-weight: 700; font-size: 1.4rem; margin-bottom: 20px; letter-spacing: 1px; position: relative; z-index: 2; }
    .philosophy-text { font-family: 'Sarabun', sans-serif; font-size: 1.3rem; font-weight: 400; line-height: 1.8; margin-bottom: 40px; text-shadow: 1px 1px 3px rgba(0,0,0,0.3); position: relative; z-index: 2; }
    .philosophy-text.slogan { font-size: 1.5rem; font-weight: 600; color: #FFF2CD; margin-bottom: 0; }
    .philosophy-divider { width: 80px; height: 3px; background-color: #D4AF37; margin: 0 auto 40px auto; border-radius: 3px; position: relative; z-index: 2; }

    /* ---------------- Executive Premium Card ---------------- */
    .executive-premium-card { background: linear-gradient(to bottom, #ffffff 0%, #fdfbf5 100%); width: 350px; border-radius: 20px; padding: 40px 20px; text-align: center; box-shadow: 0 15px 35px rgba(0,0,0,0.08); border: 1px solid #f0e6d2; border-top: 8px solid #D4AF37; transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); position: relative; margin: 0 15px; }
    .executive-premium-card:hover { transform: translateY(-10px); box-shadow: 0 25px 50px rgba(212,175,55,0.2); border-color: #D4AF37; }
    .executive-img-wrapper { margin: 0 auto 25px auto; border-radius: 12px; padding: 6px; background: linear-gradient(135deg, #D4AF37, #fdfbf5); box-shadow: 0 8px 20px rgba(212,175,55,0.3); display: inline-block; }
    .executive-photo { width: 150px; height: 200px; border-radius: 8px; object-fit: cover; object-position: top; display: block; border: 3px solid #fff; }
    .executive-name { color: #1a1a1a; font-family: 'Prompt', sans-serif; font-weight: 700; font-size: 1.35rem; margin-bottom: 12px; }
    .executive-position { color: #8B0000; font-family: 'Sarabun', sans-serif; font-weight: 700; font-size: 1.05rem; line-height: 1.5; padding: 10px 15px; background: rgba(139, 0, 0, 0.05); border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; min-height: 60px; width: 90%; border: 1px solid rgba(139, 0, 0, 0.1); }

    /* ---------------- Announcement List ---------------- */
    .announcement-container { background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eaeaea; padding: 25px; display: flex; flex-direction: column; gap: 15px; }
    .announcement-item { display: flex; align-items: center; padding: 20px; background: #fcfcfc; border: 1px solid #f0f0f0; border-radius: 12px; transition: all 0.3s ease; text-decoration: none; color: inherit; }
    .announcement-item:hover { transform: translateX(10px); box-shadow: 0 5px 20px rgba(139,0,0,0.08); border-color: #D4AF37; background: #ffffff; }
    .announcement-icon { font-size: 2.8rem; color: #d63031; margin-right: 25px; }
    .announcement-content { flex: 1; text-align: left; }
    .announcement-title { font-family: 'Prompt', sans-serif; font-size: 1.15rem; font-weight: 600; color: #333; margin: 0 0 5px 0; transition: color 0.3s; }
    .announcement-item:hover .announcement-title { color: #8B0000; }
    .announcement-date { font-family: 'Sarabun', sans-serif; font-size: 0.95rem; color: #888; }
    .btn-download-announce { background: linear-gradient(135deg, #fdf8eb, #f4e8c8); color: #8B0000; padding: 10px 25px; border-radius: 30px; font-family: 'Prompt', sans-serif; font-size: 1rem; font-weight: 600; transition: all 0.3s; border: 1px solid #D4AF37; display: inline-flex; align-items: center; gap: 8px; }
    .announcement-item:hover .btn-download-announce { background: linear-gradient(135deg, #8B0000, #5c0000); color: #ffffff; box-shadow: 0 4px 10px rgba(139,0,0,0.3); }

    /* ---------------- Clubs Section ---------------- */
    .club-grid { display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-bottom: 40px; }
    .club-card { background: #ffffff; width: 350px; border-radius: 16px; padding: 30px 20px; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.04); border: 1px solid #eaeaea; border-bottom: 4px solid #8B0000; transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); display: flex; flex-direction: column; align-items: center; position: relative; overflow: hidden; }
    .club-card:hover { transform: translateY(-8px); box-shadow: 0 15px 35px rgba(139,0,0,0.12); border-bottom-color: #D4AF37; }
    .club-icon-wrapper { width: 75px; height: 75px; background: linear-gradient(135deg, #fdf8eb 0%, #f4e8c8 100%); color: #8B0000; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 15px; transition: all 0.4s ease; box-shadow: 0 5px 15px rgba(212,175,55,0.2); }
    .club-card:hover .club-icon-wrapper { background: linear-gradient(135deg, #8B0000 0%, #5c0000 100%); color: white; transform: scale(1.15) rotate(5deg); box-shadow: 0 8px 20px rgba(139,0,0,0.3); }
    .club-name { font-family: 'Prompt', sans-serif; font-weight: 600; font-size: 1.15rem; color: #333; line-height: 1.4; }
    .club-card-special { width: 450px; border-bottom: 4px solid #D4AF37; background: #fdfaf2; }
    .club-card-special .club-icon-wrapper { background: linear-gradient(135deg, #D4AF37 0%, #b8962c 100%); color: white; }
    .club-card-special:hover .club-icon-wrapper { background: linear-gradient(135deg, #8B0000 0%, #5c0000 100%); transform: scale(1.15) rotate(0deg); }
    .club-card-special .club-name { font-size: 1.25rem; color: #8B0000; font-weight: 700; }

    /* ---------------- Services & Modals ---------------- */
    .portal-card { background: #ffffff; border-radius: 15px; padding: 40px 30px; text-align: center; color: #333; display: block; width: 100%; height: 100%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border: 1px solid rgba(0,0,0,0.05); transition: all 0.4s ease; text-decoration: none; cursor: pointer; outline: none; }
    .portal-card:hover { transform: translateY(-12px); box-shadow: 0 15px 40px rgba(139, 0, 0, 0.15); border-color: #D4AF37; }
    .icon-wrapper { width: 80px; height: 80px; margin: 0 auto 20px auto; background: linear-gradient(135deg, #8B0000 0%, #5c0000 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 20px rgba(139, 0, 0, 0.2); transition: all 0.3s ease; }
    .portal-card:hover .icon-wrapper { background: linear-gradient(135deg, #D4AF37 0%, #AA771C 100%); transform: scale(1.1) rotate(5deg); }
    .icon-wrapper i { font-size: 2rem; color: white; }
    .card-title { font-family: 'Prompt', sans-serif; font-size: 1.3rem; font-weight: 600; color: #8B0000; margin-bottom: 12px; }
    .portal-card:hover .card-title { color: #D4AF37; }
    .card-text { font-size: 0.95rem; color: #666; line-height: 1.6; font-family: 'Sarabun', sans-serif;}
    .manual-card { background: #ffffff; border-radius: 15px; padding: 15px; text-align: center; color: #333; display: block; width: 100%; height: 100%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border: 1px solid rgba(0,0,0,0.05); transition: all 0.4s ease; text-decoration: none; }
    .manual-card:hover { transform: translateY(-12px); box-shadow: 0 15px 40px rgba(139, 0, 0, 0.15); border-color: #D4AF37; }
    .manual-card img { width: 100%; height: auto; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); transition: transform 0.3s ease; }
    .manual-card:hover img { transform: scale(1.03); }

    /* ---------------- Organizational Chart CSS ---------------- */
    .org-year-tabs .nav-link { color: #666; font-family: 'Prompt', sans-serif; font-weight: 500; border-radius: 30px; padding: 10px 25px; margin: 0 5px; border: 1px solid #ddd; }
    .org-year-tabs .nav-link.active { background-color: #8B0000; color: white; border-color: #8B0000; box-shadow: 0 4px 10px rgba(139,0,0,0.2); }
    .org-tree { display: flex; flex-direction: column; align-items: center; margin-top: 20px; }
    .org-row { display: flex; justify-content: center; align-items: center; gap: 20px; width: 100%; }
    .org-row.row-5 { flex-wrap: nowrap; gap: 10px; } 
    .org-connector { width: 4px; height: 35px; background: linear-gradient(to bottom, #cbd5e1, #a3b8cc); margin: 15px auto; border-radius: 2px; }

    .org-card-new { background: #ffffff; width: 220px; border-radius: 16px; padding: 25px 15px; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border: 1px solid #eaeaea; border-top: 5px solid #8B0000; transition: all 0.3s ease; position: relative; overflow: hidden; }
    .org-card-new:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(139,0,0,0.12); }
    .org-card-new.executive-card { width: 280px; }
    .org-card-new::after { content: ""; position: absolute; top: 55%; left: 50%; transform: translate(-50%, -50%); width: 85%; height: 85%; background-image: url('https://lh5.googleusercontent.com/d/1dbkAs7wJfkjWM6URNrVxZZXuInjZaxjs'); background-size: contain; background-repeat: no-repeat; background-position: center; opacity: 0.04; z-index: 0; pointer-events: none; }
    .org-card-new > div { position: relative; z-index: 1; }
    .org-card-new.president-card { width: 340px; padding: 35px 20px; border-top: 6px solid #D4AF37; box-shadow: 0 15px 35px rgba(0,0,0,0.08); margin: 0 15px; }
    .org-card-new.president-card:hover { border-color: #D4AF37; box-shadow: 0 20px 45px rgba(212,175,55,0.15); }
    .org-img-wrapper { margin: 0 auto 15px auto; border-radius: 8px; padding: 4px; background: #ffffff; border: 1px solid #e1e6ef; box-shadow: 0 4px 10px rgba(0,0,0,0.05); display: inline-block; }
    .org-photo { width: 120px; height: 160px; border-radius: 6px; object-fit: cover; object-position: top; display: block; }
    .org-card-new.president-card .org-photo { width: 165px; height: 220px; border-radius: 8px; }
    .org-name { color: #1a1a1a; font-family: 'Prompt', sans-serif; font-weight: 700; font-size: 1.05rem; margin-bottom: 5px; letter-spacing: -0.2px; line-height: 1.3; }
    .org-card-new.president-card .org-name { font-size: 1.45rem; margin-bottom: 8px; letter-spacing: 0; }
    .org-position { color: #c0392b; font-family: 'Prompt', sans-serif; font-weight: 700; font-size: 0.95rem; margin-bottom: 12px; }
    .org-card-new.president-card .org-position { font-size: 1.2rem; color: #8B0000; font-weight: 800; }
    .org-card-new.club-card { border-top-color: #00796b; width: 250px;}
    .org-card-new.club-card .org-position { color: #00796b; }
    .org-card-new.advisor-card { border-top-color: #1b325f; }
    .org-card-new.advisor-card .org-position { color: #1b325f; }
    .org-phone { color: #0984e3; font-family: 'Sarabun', sans-serif; font-weight: 600; font-size: 1rem; display: flex; align-items: center; justify-content: center; gap: 8px; }
    .org-card-new.president-card .org-phone { font-size: 1.1rem; }
    .org-phone i { color: #0984e3; opacity: 0.8; }

    /* ---------------- Tables ---------------- */
    .table-container { background: #ffffff; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); border: 1px solid rgba(0,0,0,0.05); overflow: hidden; }
    .custom-table { margin-bottom: 0; width: 100%; border-collapse: collapse; }
    .custom-table thead th { background-color: #8B0000 !important; color: #ffffff !important; font-family: 'Prompt', sans-serif; font-weight: 500; font-size: 1.05rem; padding: 15px; border: none; white-space: nowrap; text-transform: uppercase; }
    .custom-table td { vertical-align: middle; padding: 15px; border-bottom: 1px solid #f0f0f0; }
    .custom-table tbody tr:hover { background-color: #fdf8eb; }
    .btn-green { background-color: #28a745; color: white; font-weight: 600; transition: all 0.3s; border: none; box-shadow: 0 4px 6px rgba(40, 167, 69, 0.2); display: inline-flex; align-items: center; justify-content: center; gap: 5px; text-decoration: none; cursor: pointer; }
    .btn-green:hover { background-color: #218838; color: white; transform: translateY(-2px); box-shadow: 0 6px 12px rgba(40, 167, 69, 0.3); }
    .btn-back { background-color: #fff; color: #8B0000; border: 2px solid #8B0000; font-family: 'Prompt', sans-serif; font-weight: 600; transition: all 0.3s; }
    .btn-back:hover { background-color: #8B0000; color: white; }
    .modal-custom-btn { display: flex; align-items: center; justify-content: center; gap: 10px; font-size: 1.1rem; border-radius: 12px; padding: 15px; border: 2px solid #8B0000; color: #8B0000; background: white; transition: all 0.3s; text-decoration: none; font-weight: 500; }
    .modal-custom-btn:hover { background: #8B0000; color: white; transform: translateY(-3px); box-shadow: 0 5px 15px rgba(139, 0, 0, 0.2); }

    /* ---------------- Footer (NEW DESIGN) ---------------- */
    .footer { padding-top: 60px; color: #e2e8f0; background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); border-top: 5px solid #D4AF37; position: relative; }
    .footer-container { display: flex; flex-wrap: wrap; justify-content: space-between; max-width: 1200px; margin: 0 auto; gap: 40px; padding: 0 20px; }
    .footer-col { flex: 1; min-width: 250px; }
    .footer-col h5 { font-size: 1.25rem; font-weight: 700; margin-bottom: 25px; display: flex; align-items: center; gap: 10px; color: #D4AF37; font-family: 'Prompt', sans-serif; letter-spacing: 0.5px;}
    .footer-col h5 i { font-size: 1.4rem; }
    
    .footer-about { color: #cbd5e1; font-family: 'Sarabun', sans-serif; font-size: 0.95rem; line-height: 1.7; margin-bottom: 20px; }
    
    .social-icons { display: flex; gap: 15px; margin-top: 25px; }
    .social-icons a { width: 42px; height: 42px; border-radius: 50%; background: rgba(255,255,255,0.05); display: flex; align-items: center; justify-content: center; color: #fff; font-size: 1.2rem; transition: all 0.3s; border: 1px solid rgba(255,255,255,0.1); text-decoration: none; }
    .social-icons a:hover { background: #D4AF37; color: #111; transform: translateY(-4px); box-shadow: 0 5px 15px rgba(212,175,55,0.3); border-color: #D4AF37; }

    .quick-links { list-style: none; padding: 0; margin: 0; }
    .quick-links li { margin-bottom: 12px; }
    .quick-links a { color: #cbd5e1; text-decoration: none; font-size: 1rem; font-family: 'Prompt', sans-serif; transition: all 0.3s; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; }
    .quick-links a i { font-size: 0.8rem; color: #D4AF37; transition: transform 0.3s; }
    .quick-links a:hover { color: #D4AF37; padding-left: 6px; }
    .quick-links a:hover i { transform: translateX(4px); }

    .contact-list { list-style: none; padding: 0; margin: 0; }
    .contact-list li { margin-bottom: 15px; display: flex; align-items: center; gap: 15px; font-size: 0.95rem; font-weight: 400; font-family: 'Sarabun', sans-serif; color: #cbd5e1; }
    .contact-list li i { font-size: 1.2rem; width: 25px; text-align: center; color: #D4AF37; }
    
    .real-stats-box { background: rgba(0,0,0,0.3); border-radius: 12px; padding: 25px; border: 1px solid rgba(255,255,255,0.05); text-align: center; box-shadow: inset 0 2px 15px rgba(0,0,0,0.5); }
    .real-stats-title { font-family: 'Prompt', sans-serif; color: #94a3b8; font-size: 0.95rem; margin-bottom: 10px; }
    .real-stats-number { font-family: 'Prompt', sans-serif; font-size: 2.8rem; font-weight: 800; color: #D4AF37; text-shadow: 0 0 20px rgba(212,175,55,0.4); line-height: 1; margin-bottom: 15px; letter-spacing: 2px; }
    .real-stats-label { font-size: 0.9rem; color: #64748b; font-family: 'Sarabun', sans-serif; display: flex; align-items: center; justify-content: center; gap: 6px; }
    .pulse-dot { display: inline-block; width: 8px; height: 8px; background-color: #10b981; border-radius: 50%; box-shadow: 0 0 0 rgba(16, 185, 129, 0.4); animation: pulse-green 1.5s infinite; }
    @keyframes pulse-green { 0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); } 70% { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); } 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); } }

    .footer-bottom { text-align: center; padding: 25px 20px; margin-top: 50px; background: rgba(0,0,0,0.4); font-size: 0.95rem; color: #94a3b8; border-top: 1px solid rgba(255,255,255,0.05); }
    .footer-bottom p { margin: 5px 0; }
    .footer-bottom strong { color: #D4AF37; font-weight: 600; font-family: 'Prompt', sans-serif; }

    #app-viewer { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #f4f4f4; z-index: 10000; overflow: hidden; min-width: 1280px; }
    .btn-close-app { position: absolute; top: 15px; right: 20px; z-index: 10001; background-color: #8B0000; color: white; padding: 10px 20px; border-radius: 8px; font-family: 'Prompt', sans-serif; font-weight: 600; font-size: 0.9rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.2); display: flex; align-items: center; gap: 8px; border: none; }
    .btn-close-app:hover { background-color: #5c0000; }
    #app-iframe { position: absolute; top: -46px; left: 0; width: 100%; height: calc(100% + 46px); border: none; }

    /* ---------------- Welcome Popup Modal ---------------- */
    .welcome-modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.6); backdrop-filter: blur(8px); z-index: 10000; display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: all 0.5s ease; min-width: 1280px; }
    .welcome-modal-overlay.show { opacity: 1; visibility: visible; }
    .welcome-modal-box { background: #ffffff; width: 550px; border-radius: 20px; padding: 40px 30px; text-align: center; position: relative; transform: scale(0.8) translateY(30px); transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275); box-shadow: 0 25px 50px rgba(0,0,0,0.3); border-top: 6px solid #f39c12; }
    .welcome-modal-overlay.show .welcome-modal-box { transform: scale(1) translateY(0); }
    .welcome-icon-box { width: 80px; height: 80px; background: #fdf2e9; color: #f39c12; border-radius: 50%; font-size: 2.5rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px auto; animation: spin-gear 4s linear infinite; }
    @keyframes spin-gear { 100% { transform: rotate(360deg); } }
    .welcome-title { font-family: 'Prompt', sans-serif; font-weight: 700; color: #333; font-size: 1.6rem; margin-bottom: 10px; }
    .welcome-desc { font-family: 'Sarabun', sans-serif; font-size: 1.05rem; color: #555; line-height: 1.6; margin-bottom: 25px; }
    .btn-welcome-close { background: linear-gradient(135deg, #f39c12, #e67e22); color: white; border: none; padding: 12px 30px; border-radius: 30px; font-family: 'Prompt', sans-serif; font-size: 1.05rem; font-weight: 600; cursor: pointer; transition: all 0.3s; box-shadow: 0 8px 20px rgba(243, 156, 18, 0.3); }
    .btn-welcome-close:hover { transform: translateY(-3px); box-shadow: 0 12px 25px rgba(243, 156, 18, 0.4); }
    .btn-modal-x { position: absolute; top: 15px; right: 20px; background: none; border: none; font-size: 1.5rem; color: #bbb; cursor: pointer; transition: color 0.2s; }
    .btn-modal-x:hover { color: #e74c3c; }
  </style>
</head>
<body>

  <!-- Splash Screen -->
  <div id="splash-screen">
    <img src="https://lh5.googleusercontent.com/d/1qqV_78t0QfNSTvKM9oyloD5h618rlwUB" alt="น้อมรำลึก" onerror="this.src='https://upload.wikimedia.org/wikipedia/th/thumb/e/e6/%E0%B9%82%E0%B8%A5%E0%B9%82%E0%B8%81%E0%B9%89_%E0%B8%AD%E0%B8%A7%E0%B8%97.png/200px-%E0%B9%82%E0%B8%A5%E0%B9%82%E0%B8%81%E0%B9%89_%E0%B8%AD%E0%B8%A7%E0%B8%97.png';">
    <h4 class="prompt-font mb-2">กำลังเข้าสู่เว็บไซต์ใน <span id="countdown">5</span> วินาที...</h4>
    <div class="loader-bar">
      <div class="loader-progress"></div>
    </div>
  </div>

  <!-- Welcome Alert Popup -->
  <div id="welcomeAlertModal" class="welcome-modal-overlay">
    <div class="welcome-modal-box">
      <button class="btn-modal-x" onclick="closeWelcomeAlert()"><i class="fas fa-times"></i></button>
      <div class="welcome-icon-box"><i class="fas fa-cog"></i></div>
      <h3 class="welcome-title">เว็บไซต์กำลังพัฒนาและปรับปรุง</h3>
      <p class="welcome-desc">
        ยินดีต้อนรับสู่ระบบเว็บไซต์ องค์การนักวิชาชีพฯ วท.ปัตตานี<br>
        ขณะนี้เว็บไซต์กำลังอยู่ในช่วง <strong>ทดสอบและพัฒนาระบบ (Beta Phase)</strong><br>
        ข้อมูลหรือฟังก์ชันการใช้งานบางส่วนอาจยังไม่สมบูรณ์ 100%<br>
        ต้องขออภัยในความไม่สะดวกมา ณ ที่นี้ครับ
      </p>
      <button class="btn-welcome-close" onclick="closeWelcomeAlert()">รับทราบและเข้าสู่เว็บไซต์</button>
    </div>
  </div>

  <div id="main-content" style="display:none; opacity: 0;">
    
    <!-- Topbar -->
    <div class="topbar prompt-font">
      <div class="topbar-left">
        <img src="https://lh5.googleusercontent.com/d/1dbkAs7wJfkjWM6URNrVxZZXuInjZaxjs" alt="โลโก้ อวท" onerror="this.src='https://lh5.googleusercontent.com/d/1dbkAs7wJfkjWM6URNrVxZZXuInjZaxjs';">
        <span>องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย | วิทยาลัยเทคนิคปัตตานี</span>
      </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-logos-container">
          <img src="https://lh5.googleusercontent.com/d/1dbkAs7wJfkjWM6URNrVxZZXuInjZaxjs" alt="โลโก้ อวท" class="hero-logo-main">
          <img src="https://lh5.googleusercontent.com/d/1F3BqXQaYLEc2OidxkL6lKjUFIdaQFxDx" alt="โลโก้ R-Skill" class="hero-logo-secondary">
        </div>
        <h1 class="hero-title prompt-font">องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย</h1>
        <h3 class="hero-subtitle prompt-font">วิทยาลัยเทคนิคปัตตานี</h3>
        <p class="hero-desc">Association of Future Thai Professional Pattani Technical College</p>
      </div>
    </section>

    <!-- Main Navigation Tabs -->
    <div class="main-nav-container">
      <div class="main-nav-tabs">
        <button class="main-nav-btn active" id="tab-btn-home" onclick="toggleMainSection('home')">
          <i class="fas fa-home"></i> หน้าหลัก
        </button>
        <button class="main-nav-btn" id="tab-btn-services" onclick="toggleMainSection('services')">
          <i class="fas fa-desktop"></i> บริการออนไลน์สำหรับนักศึกษา
        </button>
        <button class="main-nav-btn" id="tab-btn-org" onclick="toggleMainSection('org')">
          <i class="fas fa-sitemap"></i> โครงสร้างองค์การฯ
        </button>
        <button class="main-nav-btn" id="tab-btn-clubs" onclick="toggleMainSection('clubs')">
          <i class="fas fa-users-cog"></i> สังกัดชมรมวิชาชีพ
        </button>
      </div>
    </div>

    <!-- ========================================== -->
    <!-- SECTION 0: หน้าหลัก (Home Section)         -->
    <!-- ========================================== -->
    <section id="main-sec-home" class="content-area">
      <div class="container">
        
        <!-- คำขวัญและคติพจน์องค์การ -->
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="philosophy-card">
              <div class="philosophy-title"><i class="fas fa-crown"></i> คำขวัญองค์การ</div>
              <p class="philosophy-text">“เรียนเพื่อรู้สู่ปฏิบัติมีสมรรถนะ อาชีวะบริการสร้างมาตรฐานชีวิต<br>เศรษฐกิจสร้างสรรค์ยึดมั่นหลักพอเพียง เคียงสังคมสมดุลสู่ทุกรุ่นที่ยั่งยืน”</p>
              
              <div class="philosophy-divider"></div>
              
              <div class="philosophy-title"><i class="fas fa-star"></i> คติพจน์องค์การ</div>
              <p class="philosophy-text slogan">"มีคุณธรรม ล้ำเลิศความรู้ เป็นผู้ชำนาญ บริการดีเยี่ยม"</p>
            </div>
          </div>
        </div>

        <!-- คณะกรรมการบริหารงานองค์การฯ -->
        <div class="text-center mb-5 mt-5 pt-3">
          <h2 class="prompt-font section-title" style="font-size: 1.8rem; color: #8B0000; line-height: 1.5;">
            <i class="fas fa-medal" style="color: #D4AF37; margin-right: 10px;"></i>
            คณะกรรมการบริหารงานองค์การนักวิชาชีพในอนาคตแห่งประเทศไทย
          </h2>
          <h3 class="prompt-font section-subtitle mt-2">วิทยาลัยเทคนิคปัตตานี</h3>
          <div class="divider"><div class="line"></div><i class="fas fa-star" style="color: #D4AF37;"></i><div class="line"></div></div>
        </div>

        <div class="org-tree" style="margin-top: 0; margin-bottom: 50px;">
          <div class="org-row align-items-stretch">
            
            <div class="executive-premium-card">
              <div class="executive-img-wrapper">
                <img src="im/ผู้บริหาร/ผู้บริหารสถานศึกษา.jpg" alt="ผู้บริหารสถานศึกษา" class="executive-photo" onerror="this.src='https://ui-avatars.com/api/?name=ผอ&background=f0f0f0&color=333&size=300'">
              </div>
              <div class="executive-name">นายทิว กาสิวุฒิ</div>
              <div class="executive-position">ผู้บริหารสถานศึกษา</div>
            </div>

            <div class="executive-premium-card">
              <div class="executive-img-wrapper">
                <img src="im/ผู้บริหาร/รองผู้อำนวยการ.jpg" alt="รองผู้อำนวยการ" class="executive-photo" onerror="this.src='https://ui-avatars.com/api/?name=รอง&background=f0f0f0&color=333&size=300'">
              </div>
              <div class="executive-name">ดร.นิฟิรดาวส์  อับดุลละบุตร</div>
              <div class="executive-position">รองผู้อำนวยการฝ่ายพัฒนากิจการนักเรียน นักศึกษา</div>
            </div>

            <div class="executive-premium-card">
              <div class="executive-img-wrapper">
                <img src="im/ผู้บริหาร/หัวหน้างาน.jpg" alt="หัวหน้างาน" class="executive-photo" onerror="this.src='https://ui-avatars.com/api/?name=หน&background=f0f0f0&color=333&size=300'">
              </div>
              <div class="executive-name">นายมาสือลัน  มะกะทุง</div>
              <div class="executive-position">หัวหน้างานกิจการนักเรียน นักศึกษา</div>
            </div>

          </div>
        </div>

        <!-- ข่าวแจ้งประกาศ อวท. (ดึงไฟล์จากโฟลเดอร์อัตโนมัติ) -->
        <div class="text-center mb-4 mt-5 pt-3">
          <h2 class="prompt-font section-title" style="font-size: 1.8rem; color: #8B0000; line-height: 1.5;">
            <i class="fas fa-bullhorn" style="color: #D4AF37; margin-right: 10px;"></i>
            ข่าวแจ้งประกาศ อวท.
          </h2>
          <div class="divider"><div class="line"></div><i class="fas fa-newspaper" style="color: #D4AF37;"></i><div class="line"></div></div>
        </div>

        <div class="row justify-content-center mb-5">
          <div class="col-10">
            <div class="announcement-container">
              
              <?php
                // แนะนำให้ตั้งชื่อโฟลเดอร์ให้ตรงกับคำว่า news หรือ ข่าวแจ้งประกาศ อวท
                $folder_name = 'news'; 
                $folder_path = $folder_name . '/';
                $has_files = false;

                if (is_dir($folder_path)) {
                    $files = scandir($folder_path);
                    foreach ($files as $file) {
                        if ($file !== "." && $file !== ".." && strtolower(pathinfo($file, PATHINFO_EXTENSION)) == 'pdf') {
                            $has_files = true;
                            $file_path = $folder_path . $file;
                            
                            // เข้ารหัสชื่อไฟล์เพื่อป้องกัน 404
                            $safe_file = str_replace('%20', ' ', rawurlencode($file));
                            $safe_url = $folder_name . '/' . $safe_file;
                            
                            $timestamp = filemtime($file_path);
                            $thai_year = date("Y", $timestamp) + 543;
                            $file_date = date("d/m/", $timestamp) . $thai_year;
                            
                            echo '<a href="'.$safe_url.'" target="_blank" class="announcement-item">';
                            echo '  <div class="announcement-icon"><i class="fas fa-file-pdf"></i></div>';
                            echo '  <div class="announcement-content">';
                            echo '    <h4 class="announcement-title">'.$file.'</h4>';
                            echo '    <span class="announcement-date"><i class="far fa-clock"></i> อัปเดตเมื่อ '.$file_date.'</span>';
                            echo '  </div>';
                            echo '  <div class="announcement-action">';
                            echo '    <span class="btn-download-announce"><i class="fas fa-download"></i> ดาวน์โหลด / เปิดอ่าน</span>';
                            echo '  </div>';
                            echo '</a>';
                        }
                    }
                }

                if (!$has_files) {
                    echo '<div class="text-center p-5 text-muted prompt-font">';
                    echo '  <i class="fas fa-folder-open mb-3" style="font-size: 3rem; color: #ccc;"></i>';
                    echo '  <h5 style="color: #888;">ยังไม่มีข่าวแจ้งประกาศในขณะนี้</h5>';
                    echo '</div>';
                }
              ?>

            </div>
          </div>
        </div>

        <!-- คู่มือประเมินองค์การฯ -->
        <div class="text-center mb-4 mt-5">
          <h2 class="prompt-font section-subtitle">คู่มือการประเมินองค์การนักวิชาชีพในอนาคตแห่งประเทศไทย</h2>
          <h2 class="prompt-font section-subtitle">และสมาชิกดีเด่นโครงการภายใต้การนิเทศ</h2>
          <div class="divider"><div class="line"></div><i class="fas fa-book-open"></i><div class="line"></div></div>
        </div>

        <div class="row justify-content-center" style="gap: 24px;">
          <div class="col-3">
            <a href="https://drive.google.com/drive/folders/1FNa842hcgXJBvGDlzILHLP8ghDM3WfiC" class="manual-card" target="_blank">
              <img src="https://lh5.googleusercontent.com/d/1L2ZXp8AfpTGDjm2le_Y88VrNF0AMY9zq" alt="ระเบียบฯ">
              <div class="card-title mt-2">ระเบียบฯ อวท.</div>
            </a>
          </div>
          <div class="col-3">
            <a href="https://drive.google.com/drive/folders/108U-RFxf5fIHALRwLAo4glym1_rpKI4Z" class="manual-card" target="_blank">
              <img src="https://lh5.googleusercontent.com/d/14Wj1K2Z4k-1GtS1DPeTEPpRbCy8CltxC" alt="คู่มือ">
              <div class="card-title mt-2">คู่มือการประเมิน</div>
            </a>
          </div>
          <div class="col-3">
            <a href="https://drive.google.com/drive/folders/1FFL1uUd2THJAInuYrRjeqHh5JmAUMYqP" class="manual-card" target="_blank">
              <img src="https://lh5.googleusercontent.com/d/115sCEZhjJ2uD7aouQVrsS5cYoaoNjER-" alt="แผน">
              <div class="card-title mt-2">แผนปฏิบัติกิจกรรม</div>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- ========================================== -->
    <!-- SECTION 1: บริการออนไลน์ (Services Section) -->
    <!-- ========================================== -->
    <section id="main-sec-services" class="content-area portal-container" style="display: none;">
      <div class="container">
        <!-- Page 1 (หน้าเมนูหลักบริการ) -->
        <div id="page-1">
          <div class="row justify-content-center mb-5 pb-4" style="gap: 24px;">
            <div class="col-5">
              <button class="portal-card" onclick="openApp('https://script.google.com/macros/s/AKfycbysXd4EQOxilHAifGWxecO-6-l0jBzezoz8XqZWvhxeQy2BO6ZVSV17pqZUfp45-OcwOw/exec')">
                <div class="icon-wrapper"><i class="fas fa-id-card-clip"></i></div>
                <div class="card-title">ระบบรับสมัครคณะกรรมการ อวท.</div>
                <div class="card-text">ระบบกรอกใบสมัครและตรวจสอบสถานะ<br>คณะกรรมการดำเนินงาน อวท.</div>
              </button>
            </div>
            <div class="col-5">
              <button class="portal-card" onclick="openApp('https://script.google.com/macros/s/AKfycbzMaOeUgPgYHXWSsKuMyJGDelhhx06Fd_RwU9pwZIZagyZanX2kS_pe5lWiZoqgwKm0GQ/exec')">
                <div class="icon-wrapper"><i class="fas fa-vote-yea"></i></div>
                <div class="card-title">ระบบเลือกตั้งนายกองค์การฯ</div>
                <div class="card-text">เข้าสู่ระบบอิเล็กทรอนิกส์เพื่อลงคะแนนเสียง<br>เลือกตั้งนายกองค์การนักวิชาชีพฯ</div>
              </button>
            </div>
            <div class="col-5">
              <button class="portal-card" onclick="switchPage('page-3')">
                <div class="icon-wrapper"><i class="fas fa-clipboard-list"></i></div>
                <div class="card-title">แบบรายงานการเข้าร่วมกิจกรรมนักศึกษา</div>
                <div class="card-text">ระบบรายงานผลการเข้าร่วมกิจกรรม<br>และโครงการต่างๆ สำหรับนักศึกษา</div>
              </button>
            </div>
            <div class="col-5">
              <button class="portal-card" onclick="switchPage('page-2')">
                <div class="icon-wrapper"><i class="fas fa-certificate"></i></div>
                <div class="card-title">ดาวน์โหลดเกียรติบัตรการเข้าร่วมกิจกรรม</div>
                <div class="card-text">ระบบค้นหาและดาวน์โหลดเกียรติบัตร<br>สำหรับผู้เข้าร่วมโครงการและกิจกรรมต่างๆ</div>
              </button>
            </div>
            <div class="col-5">
              <button class="portal-card" data-bs-toggle="modal" data-bs-target="#qrModal">
                <div class="icon-wrapper"><i class="fas fa-qrcode"></i></div>
                <div class="card-title">QR Code สำหรับแสกนชื่อเข้าแถว</div>
                <div class="card-text">สแกนชื่อ นร. นศ. เพื่อเข้าร่วมกิจกรรมหน้าเสาธง<br>ประจำปีการศึกษา 2569</div>
              </button>
            </div>
            <div class="col-5">
              <button class="portal-card" data-bs-toggle="modal" data-bs-target="#statModal">
                <div class="icon-wrapper"><i class="fas fa-chart-pie"></i></div>
                <div class="card-title">สถิติการแสกนชื่อร่วมกิจกรรมเข้าแถว</div>
                <div class="card-text">ตรวจสอบข้อมูลและสถิติการเข้าร่วมกิจกรรม<br>ภาคเรียนที่ 1 ปีการศึกษา 2569</div>
              </button>
            </div>
          </div>
        </div>

        <!-- Page 2 (ดาวน์โหลดเกียรติบัตร) -->
        <div id="page-2" style="display: none;">
          <div class="text-center mb-4">
            <h2 class="prompt-font section-title">ดาวน์โหลดเกียรติบัตรการเข้าร่วมกิจกรรม</h2>
            <div class="divider"><div class="line"></div><i class="fas fa-award"></i><div class="line"></div></div>
          </div>
          <div class="mb-4">
            <button class="btn btn-back px-4 py-2" onclick="switchPage('page-1')"><i class="fas fa-arrow-left"></i> ย้อนกลับหน้าเมนู</button>
          </div>
          <div class="table-container">
            <table class="table custom-table align-middle">
              <thead><tr><th class="text-center" style="width: 10%;">ลำดับ</th><th style="width: 60%;">วันที่จัดกิจกรรม / ชื่อกิจกรรม</th><th class="text-center" style="width: 30%;">ดาวน์โหลดเกียรติบัตร</th></tr></thead>
              <tbody class="prompt-font">
                <tr>
                  <td class="text-center">1</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมจิตอาสาพัฒนามัสยิด</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 15 กรกฎาคม 2569</span></td>
                  <td class="text-center"><a href="https://drive.google.com/drive/folders/10oW-p06rCigrQhYNcwuJW5Bm-UsuQ9z2" target="_blank" class="btn btn-green btn-sm px-3 py-2"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a></td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมส่งเสริมศาสนา ศิลปะ วัฒนธรรม (หล่อเทียน)</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 15 กรกฎาคม 2569</span></td>
                  <td class="text-center"><a href="https://drive.google.com/drive/folders/10EQpNrE6tCch9Pr0z6KfwGvKDQcKL01q" target="_blank" class="btn btn-green btn-sm px-3 py-2"><i class="fas fa-cloud-download-alt"></i> ดาวน์โหลด</a></td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมอบรมคุณธรรม จริยธรรม</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 21 กรกฎาคม 2569</span></td>
                  <td class="text-center"><span class="badge bg-light text-muted border px-3 py-2" style="font-weight: 400; font-size: 0.85rem;"><i class="fas fa-lock"></i> ยังไม่มีเอกสาร</span></td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมส่งเสริมศาสนา ศิลปะ วัฒนธรรม (แห่เทียน)</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 21 กรกฎาคม 2569</span></td>
                  <td class="text-center"><span class="badge bg-light text-muted border px-3 py-2" style="font-weight: 400; font-size: 0.85rem;"><i class="fas fa-lock"></i> ยังไม่มีเอกสาร</span></td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมเผยแพร่ความรู้ด้านอนามัยการเจริญพันธุ์ และการป้องกันการตั้งครรภ์ในวัยรุ่น</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 22 กรกฎาคม 2569</span></td>
                  <td class="text-center"><span class="badge bg-light text-muted border px-3 py-2" style="font-weight: 400; font-size: 0.85rem;"><i class="fas fa-lock"></i> ยังไม่มีเอกสาร</span></td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมวันสุนทรภู่และวันภาษาไทยแห่งชาติ</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 22 กรกฎาคม 2569</span></td>
                  <td class="text-center"><span class="badge bg-light text-muted border px-3 py-2" style="font-weight: 400; font-size: 0.85rem;"><i class="fas fa-lock"></i> ยังไม่มีเอกสาร</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Page 3 (รายงานกิจกรรม) -->
        <div id="page-3" style="display: none;">
          <div class="text-center mb-4">
            <h2 class="prompt-font section-title">แบบรายงานการเข้าร่วมกิจกรรม</h2>
            <div class="divider"><div class="line"></div><i class="fas fa-edit"></i><div class="line"></div></div>
          </div>
          <div class="mb-4">
            <button class="btn btn-back px-4 py-2" onclick="switchPage('page-1')"><i class="fas fa-arrow-left"></i> ย้อนกลับหน้าเมนู</button>
          </div>
          <div class="table-container">
            <table class="table custom-table align-middle">
              <thead><tr><th class="text-center" style="width: 10%;">ลำดับ</th><th style="width: 60%;">วันที่จัดกิจกรรม / ชื่อกิจกรรม</th><th class="text-center" style="width: 30%;">รายงานการเข้าร่วม</th></tr></thead>
              <tbody class="prompt-font">
                <tr>
                  <td class="text-center">1</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมจิตอาสาพัฒนามัสยิด</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 15 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLSffT4dskxPj4K9Mqp7wf53H9NFU0JHG6Jwl_KiIBTZ2oRKOeg/viewform')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมส่งเสริมศาสนา ศิลปะ วัฒนธรรม (หล่อเทียน)</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 15 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLSffT4dskxPj4K9Mqp7wf53H9NFU0JHG6Jwl_KiIBTZ2oRKOeg/viewform')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
                <tr>
                  <td class="text-center">3</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมอบรมคุณธรรม จริยธรรม</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 21 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLSffT4dskxPj4K9Mqp7wf53H9NFU0JHG6Jwl_KiIBTZ2oRKOeg/viewform')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
                <tr>
                  <td class="text-center">4</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมส่งเสริมศาสนา ศิลปะ วัฒนธรรม (แห่เทียน)</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 21 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLSffT4dskxPj4K9Mqp7wf53H9NFU0JHG6Jwl_KiIBTZ2oRKOeg/viewform')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
                <tr>
                  <td class="text-center">5</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมเผยแพร่ความรู้ด้านอนามัยการเจริญพันธุ์ และการป้องกันการตั้งครรภ์ในวัยรุ่น</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 22 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLScmcLqjjzXSVnY9AebhwEVVz37G81zMfhu9zU8ZaIXmtpcWAg/viewform?pli=1')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
                <tr>
                  <td class="text-center">6</td>
                  <td><strong style="color: #8B0000; font-size: 1.1rem;">กิจกรรมวันสุนทรภู่และวันภาษาไทยแห่งชาติ</strong><br><span class="text-muted"><i class="far fa-calendar-alt"></i> วันที่ 22 กรกฎาคม 2569</span></td>
                  <td class="text-center"><button class="btn btn-green btn-sm px-3 py-2" onclick="openApp('https://docs.google.com/forms/d/e/1FAIpQLSfHab0F15VoVQTfPT_X2O3TbsB0Y3psyxhhfYGFBAg1nFIHzA/viewform?pli=1')"><i class="fas fa-clipboard-check"></i> ทำแบบรายงาน</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <!-- ========================================== -->
    <!-- SECTION 3: โครงสร้างองค์การฯ (Org Chart)   -->
    <!-- ========================================== -->
    <section id="main-sec-org" class="content-area" style="display: none;">
      <div class="container">
        
        <div class="text-center mb-4">
          <h2 class="prompt-font section-title">ทำเนียบคณะกรรมการดำเนินงาน</h2>
          <h3 class="prompt-font section-subtitle mt-2">องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย วิทยาลัยเทคนิคปัตตานี</h3>
          <div class="divider"><div class="line"></div><i class="fas fa-sitemap"></i><div class="line"></div></div>
        </div>

        <!-- แท็บเลือกปีการศึกษา (2570 ขึ้นก่อน) -->
        <ul class="nav nav-pills org-year-tabs justify-content-center mb-4" id="orgTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#year2570" type="button">ประจำปีการศึกษา 2570</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#year2569" type="button">ประจำปีการศึกษา 2569</button>
          </li>
        </ul>

        <div class="tab-content" id="orgTabContent">
          
          <!-- แผนผังปี 2570 (Active Default) -->
          <div class="tab-pane fade show active" id="year2570" role="tabpanel">
            <div class="org-tree">

              <!-- แถว 1: รองนายก | นายกองค์การ | เลขานุการ -->
              <div class="org-row">
                
                <div class="org-card-new executive-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/รองนายกองค์การ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=รอง&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายณัฐภัทร ศรีสุข</div>
                    <div class="org-position">รองนายกองค์การ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 080-187-9549</div>
                  </div>
                </div>

                <div class="org-card-new president-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/นายกองค์การ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=นายก&background=8B0000&color=fff&size=300'">
                    </div>
                    <div class="org-name">นายนิฮาริส วาเด็ง</div>
                    <div class="org-position">นายกองค์การนักวิชาชีพฯ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 082-180-8495</div>
                  </div>
                </div>

                <div class="org-card-new executive-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/เลขานุการ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ลข&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายมูฮัมหมัดอามีรุดดีน ยาเเล</div>
                    <div class="org-position">เลขานุการ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 082-595-8013</div>
                  </div>
                </div>

              </div>

              <div class="org-connector"></div>

              <!-- แถว 2: เหรัญญิก ปฏิคม นายทะเบียน ประชาสัมพันธ์ ครูที่ปรึกษา -->
              <div class="org-row row-5">
                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/เหรัญญิก.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=หญ&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายมุสตากีม เลาะแมหามะ</div>
                    <div class="org-position">เหรัญญิก</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 088-772-9030</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/ปฏิคม.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ปค&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายพีระณัฐ ลิ่มประยูร</div>
                    <div class="org-position">ปฏิคม</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 084-996-2702</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/นายทะเบียน.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=นท&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายอบูชัยด์ แวดอเล๊าะ</div>
                    <div class="org-position">นายทะเบียน</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 095-189-1985</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/ประชาสัมพันธ์.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ปส&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายพัทรพงษ์ อาจจิชัย</div>
                    <div class="org-position">ประชาสัมพันธ์</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 097-357-9966</div>
                  </div>
                </div>

                <div class="org-card-new advisor-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/ครูที่ปรึกษา.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ครู&background=1b325f&color=fff&size=200'">
                    </div>
                    <div class="org-name">นางสาวสาริณี แวกือจิ</div>
                    <div class="org-position">ครูที่ปรึกษา</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>
              </div>

              <div class="org-connector"></div>

              <!-- แถว 3: ประธานชมรม -->
              <div class="org-row">
                <div class="org-card-new club-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/ประธานชมรมTOBENUMBERONE.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=TB&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายธีรกานต์ บุญสุวรรณ์</div>
                    <div class="org-position">ประธานชมรม<br>TO BE NUMBER ONE</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 099-060-3611</div>
                  </div>
                </div>

                <div class="org-card-new club-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2570/ประธานชมรมจิตอาสา.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=จส&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายคฑาวุธ แสนาผา</div>
                    <div class="org-position">ประธานชมรม<br>จิตอาสา</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 095-081-6776</div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- แผนผังปี 2569 -->
          <div class="tab-pane fade" id="year2569" role="tabpanel">
            
            <div class="org-tree">

              <!-- แถว 1: รองนายก | นายกองค์การ | เลขานุการ -->
              <div class="org-row">
                
                <div class="org-card-new executive-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/รองนายกองค์การ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=รอง&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายกันตินันท์ ขวัญพัทลุง</div>
                    <div class="org-position">รองนายกองค์การ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

                <div class="org-card-new president-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/นายกองค์การ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=นายก&background=8B0000&color=fff&size=300'">
                    </div>
                    <div class="org-name">นายไซนันอาบีดีน ยาโม</div>
                    <div class="org-position">นายกองค์การนักวิชาชีพฯ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

                <div class="org-card-new executive-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/เลขานุการ.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ลข&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายอัฎฮา เบ็ญแวบาราเฮง</div>
                    <div class="org-position">เลขานุการ</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

              </div>

              <div class="org-connector"></div>

              <!-- แถว 2: เหรัญญิก ปฏิคม นายทะเบียน ประชาสัมพันธ์ ครูที่ปรึกษา -->
              <div class="org-row row-5">
                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/เหรัญญิก.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=หญ&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายอดิลัน สือเเมง</div>
                    <div class="org-position">เหรัญญิก</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/ปฏิคม.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ปค&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายชินกฤต ปานดำ</div>
                    <div class="org-position">ปฏิคม</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/นายทะเบียน.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=นท&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายอดิสร อาลี</div>
                    <div class="org-position">นายทะเบียน</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>

                <div class="org-card-new">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/ประชาสัมพันธ์.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ปส&background=e0e0e0&color=333&size=200'">
                    </div>
                    <div class="org-name">นายอดิศักดิ์ โละมะ</div>
                    <div class="org-position">ประชาสัมพันธ์</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> 093-549-6751</div>
                  </div>
                </div>

                <div class="org-card-new advisor-card">
                  <div>
                    <div class="org-img-wrapper">
                      <img src="im/ตำแหน่ง2569/ครูที่ปรึกษา.jpg" alt="Profile" class="org-photo" onerror="this.src='https://ui-avatars.com/api/?name=ครู&background=1b325f&color=fff&size=200'">
                    </div>
                    <div class="org-name">นางสาวสาริณี แวกือจิ</div>
                    <div class="org-position">ครูที่ปรึกษา</div>
                    <div class="org-phone"><i class="fas fa-phone-alt"></i> -</div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ========================================== -->
    <!-- SECTION 4: สังกัดชมรมวิชาชีพ (Clubs Section) -->
    <!-- ========================================== -->
    <section id="main-sec-clubs" class="content-area" style="display: none;">
      <div class="container">
        <div class="text-center mb-5">
          <h2 class="prompt-font section-title">สังกัดชมรมวิชาชีพ</h2>
          <h3 class="prompt-font section-subtitle mt-2">วิทยาลัยเทคนิคปัตตานี</h3>
          <div class="divider"><div class="line"></div><i class="fas fa-users"></i><div class="line"></div></div>
        </div>
        
        <!-- 9 ชมรมวิชาชีพปกติ -->
        <div class="club-grid">
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-microchip"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างอิเล็กทรอนิกส์</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-cogs"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างกลโรงงาน</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-computer"></i></div>
            <div class="club-name">ชมรมวิชาชีพเทคโนโลยีคอมพิวเตอร์</div>
          </div>
          
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-bolt"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างไฟฟ้า</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-fire-flame-curved"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างเชื่อมโลหะ</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-car-side"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างยนต์</div>
          </div>
          
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-chart-pie"></i></div>
            <div class="club-name">ชมรมวิชาชีพเทคโนโลยีธุรกิจดิจิทัล</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-server"></i></div>
            <div class="club-name">ชมรมวิชาชีพเทคโนโลยีสารสนเทศ</div>
          </div>
          <div class="club-card">
            <div class="club-icon-wrapper"><i class="fas fa-hard-hat"></i></div>
            <div class="club-name">ชมรมวิชาชีพช่างก่อสร้าง/โยธา</div>
          </div>
        </div>

        <!-- 2 ชมรมพิเศษ -->
        <div class="club-grid mt-5 pt-3" style="border-top: 1px dashed #ddd;">
          <div class="club-card club-card-special">
            <div class="club-icon-wrapper"><i class="fas fa-ribbon"></i></div>
            <div class="club-name">ประธานชมรม TO BE NUMBER ONE</div>
          </div>
          <div class="club-card club-card-special">
            <div class="club-icon-wrapper"><i class="fas fa-hand-holding-heart"></i></div>
            <div class="club-name">ประธานชมรม จิตอาสา</div>
          </div>
        </div>

      </div>
    </section>

    <!-- ======================= FOOTER (ดีไซน์ใหม่) ======================= -->
    <div class="footer">
      
      <!-- ซ่อน ID ของสถิติเก่าไว้ในนี้ เพื่อไม่ให้ JavaScript เกิด Error โค้ดช็อต -->
      <div style="display:none;">
        <span id="stat-online"></span>
        <span id="stat-today"></span>
        <span id="stat-week"></span>
        <span id="stat-month"></span>
        <span id="stat-total"></span>
      </div>

      <div class="footer-container">
        
        <!-- คอลัมน์ที่ 1: เกี่ยวกับองค์กร & Social -->
        <div class="footer-col">
          <h5 class="prompt-font"><i class="fas fa-layer-group"></i> องค์การนักวิชาชีพฯ</h5>
          <p class="footer-about">
            องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย (อวท.) วิทยาลัยเทคนิคปัตตานี มุ่งเน้นพัฒนาศักยภาพ ทักษะวิชาชีพ และความเป็นผู้นำของนักศึกษาอย่างยั่งยืน
          </p>
          <div class="social-icons">
            <a href="https://www.facebook.com/pattanaPTC" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/aft.ptc_2026?igsh=Mzl5MHl1bjFsMHk2&utm_source=qr" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.tiktok.com/@technicpattani?_r=1&_t=ZS-98gbOn7ghOP" target="_blank" title="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="mailto:aft.technicpattani@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- คอลัมน์ที่ 2: ลิงก์ด่วน Quick Links -->
        <div class="footer-col">
          <h5 class="prompt-font"><i class="fas fa-link"></i> ลิงก์ด่วน</h5>
          <ul class="quick-links">
            <li><a onclick="toggleMainSection('home')"><i class="fas fa-chevron-right"></i> หน้าหลัก</a></li>
            <li><a onclick="toggleMainSection('services')"><i class="fas fa-chevron-right"></i> บริการออนไลน์สำหรับนักศึกษา</a></li>
            <li><a onclick="toggleMainSection('org')"><i class="fas fa-chevron-right"></i> โครงสร้างองค์การฯ</a></li>
            <li><a onclick="toggleMainSection('clubs')"><i class="fas fa-chevron-right"></i> สังกัดชมรมวิชาชีพ</a></li>
          </ul>
        </div>

        <!-- คอลัมน์ที่ 3: ช่องทางติดต่อ -->
        <div class="footer-col">
          <h5 class="prompt-font"><i class="fas fa-phone-alt"></i> ช่องทางติดต่อ</h5>
          <ul class="contact-list">
            <li><i class="fas fa-map-marker-alt"></i> วิทยาลัยเทคนิคปัตตานี</li>
            <li><i class="fas fa-envelope"></i> aft.technicpattani@gmail.com</li>
            <li><i class="fab fa-line"></i> ID LINE: adisak_2006</li>
            <li><i class="fas fa-phone"></i> 093-549-6751</li>
          </ul>
        </div>

        <!-- คอลัมน์ที่ 4: สถิติการเข้าชมจริง (PHP File Counter) -->
        <div class="footer-col">
          <h5 class="prompt-font"><i class="fas fa-chart-line"></i> สถิติการเข้าชมเว็บไซต์</h5>
          <div class="real-stats-box">
            <?php
              $counter_file = 'visitor_count.txt';
              // ตรวจสอบและสร้างไฟล์ถ้ายังไม่มี หรือไฟล์ว่างเปล่า
              if(!file_exists($counter_file)){
                  file_put_contents($counter_file, 0); // เริ่มต้นที่ 0 
              }
              
              // อ่านค่าสถิติ เพิ่มค่าทีละ 1 แล้วบันทึกกลับลงไฟล์
              $current_count = (int)file_get_contents($counter_file);
              $current_count++;
              file_put_contents($counter_file, $current_count);
              
              // เติมเลข 0 ด้านหน้าให้ครบ 5 หลัก (เช่น 00001, 00002)
              $real_visitor_count = str_pad($current_count, 5, "0", STR_PAD_LEFT);
            ?>
            <div class="real-stats-title">จำนวนผู้เข้าชมทั้งหมด</div>
            <div class="real-stats-number"><?php echo $real_visitor_count; ?></div>
            <div class="real-stats-label">
              <span class="pulse-dot"></span> ระบบบันทึกสถิติเรียลไทม์
            </div>
          </div>
        </div>

      </div>
      
      <!-- ลิขสิทธิ์และผู้พัฒนา -->
      <div class="footer-bottom">
        <p>องค์การนักวิชาชีพในอนาคตแห่งประเทศไทย วิทยาลัยเทคนิคปัตตานี © 2026</p>
        <p>Developed by <strong>Adisak Loma</strong></p>
      </div>
    </div>

  </div> 

  <!-- Modal: QR Code -->
  <div class="modal fade" id="qrModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 15px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
        <div class="modal-header" style="background-color: #8B0000; color: white; border-bottom: none;">
          <h5 class="modal-title prompt-font"><i class="fas fa-qrcode"></i> เลือกระดับชั้น (QR Code)</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4 text-center prompt-font">
          <p class="mb-4 text-muted">กรุณาเลือกระดับชั้นเพื่อรับ QR Code สำหรับแสกนชื่อเข้าแถว ปีการศึกษา 2569</p>
          <div class="d-grid gap-3">
            <a href="https://drive.google.com/drive/folders/1oAgJGmb_qtM_w7yjpP0_m3PUviYdFblQ" target="_blank" class="modal-custom-btn"><i class="fas fa-user-graduate"></i> ปวช. ประจำปีการศึกษา 2569</a>
            <a href="https://drive.google.com/drive/folders/1isGHpOrsG_kwJ1QJvNxIVYp5Q_vrim2m" target="_blank" class="modal-custom-btn"><i class="fas fa-user-tie"></i> ปวส. ประจำปีการศึกษา 2569</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: สถิติ -->
  <div class="modal fade" id="statModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="border-radius: 15px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
        <div class="modal-header" style="background-color: #8B0000; color: white; border-bottom: none;">
          <h5 class="modal-title prompt-font"><i class="fas fa-chart-pie"></i> เลือกระดับชั้น (สถิติเข้าแถว)</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body p-4 text-center prompt-font">
          <p class="mb-4 text-muted">กรุณาเลือกระดับชั้นเพื่อดูสถิติการเข้าแถว ภาคเรียนที่ 1 ปีการศึกษา 2569</p>
          <div class="d-grid gap-3">
            <a href="https://docs.google.com/spreadsheets/d/1-Ddu3D9lG_KVrKcfwdaPs8F2FdLw27vixl0aqrBxVv4/edit?gid=1837438035#gid=1837438035" target="_blank" class="modal-custom-btn"><i class="fas fa-chart-bar"></i> ปวช. ประจำปีการศึกษา 2569</a>
            <a href="https://docs.google.com/spreadsheets/d/1dRhrs0d_oS0ux6dwtxCqWLG7v6DQzAwivhiidTrG5Cw/edit?gid=1837438035#gid=1837438035" target="_blank" class="modal-custom-btn"><i class="fas fa-chart-area"></i> ปวส. ประจำปีการศึกษา 2569</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="app-viewer">
    <button class="btn-close-app" onclick="closeApp()"><i class="fas fa-arrow-left"></i> กลับหน้าหลัก</button>
    <iframe id="app-iframe" src=""></iframe>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    let timeLeft = 5;
    const countdownElement = document.getElementById('countdown');
    const splashScreen = document.getElementById('splash-screen');
    const mainContent = document.getElementById('main-content');

    const timer = setInterval(() => {
      timeLeft--;
      countdownElement.textContent = timeLeft;
      if (timeLeft <= 0) {
        clearInterval(timer);
        splashScreen.style.opacity = '0';
        splashScreen.style.visibility = 'hidden';
        setTimeout(() => {
          splashScreen.style.display = 'none'; 
          mainContent.style.display = 'block'; 
          setTimeout(() => { 
            mainContent.style.opacity = '1'; 
            
            setTimeout(() => {
              document.getElementById('welcomeAlertModal').classList.add('show');
            }, 500);

          }, 50);
        }, 1000);
      }
    }, 1000);

    function closeWelcomeAlert() {
      document.getElementById('welcomeAlertModal').classList.remove('show');
      setTimeout(() => {
        document.getElementById('welcomeAlertModal').style.display = 'none';
      }, 500);
    }

    function openApp(url) {
      if (!url) return;
      document.getElementById('main-content').style.display = 'none';
      document.getElementById('app-viewer').style.display = 'block';
      document.getElementById('app-iframe').src = url;
    }

    function closeApp() {
      document.getElementById('app-viewer').style.display = 'none';
      document.getElementById('main-content').style.display = 'block';
      document.getElementById('app-iframe').src = ''; 
    }

    function toggleMainSection(section) {
      document.getElementById('tab-btn-home').classList.remove('active');
      document.getElementById('tab-btn-clubs').classList.remove('active');
      document.getElementById('tab-btn-services').classList.remove('active');
      document.getElementById('tab-btn-org').classList.remove('active');
      document.getElementById('tab-btn-' + section).classList.add('active');

      document.getElementById('main-sec-home').style.display = 'none';
      document.getElementById('main-sec-clubs').style.display = 'none';
      document.getElementById('main-sec-services').style.display = 'none';
      document.getElementById('main-sec-org').style.display = 'none';

      if (section === 'home') {
        document.getElementById('main-sec-home').style.display = 'block';
      } else if (section === 'clubs') {
        document.getElementById('main-sec-clubs').style.display = 'block';
      } else if (section === 'services') {
        document.getElementById('main-sec-services').style.display = 'block';
        switchPage('page-1'); 
      } else {
        document.getElementById('main-sec-org').style.display = 'block';
      }
      
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function switchPage(pageId) {
      document.getElementById('page-1').style.display = 'none';
      document.getElementById('page-2').style.display = 'none';
      document.getElementById('page-3').style.display = 'none';
      document.getElementById(pageId).style.display = 'block';
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function simulateVisitorStats() {
      // โค้ดชุดนี้ถูกซ่อนไว้ใน FOOTER แล้วเพื่อไม่ให้ Error แต่คงไว้ตามกฎห้ามลบโค้ดเก่า
      const onlineNow = Math.floor(Math.random() * 12) + 1;
      const today = Math.floor(Math.random() * 50) + onlineNow + 20; 
      const thisWeek = today + Math.floor(Math.random() * 300) + 150;
      const thisMonth = thisWeek + Math.floor(Math.random() * 1200) + 800;
      const total = "15,842"; 

      if(document.getElementById('stat-online')) {
          document.getElementById('stat-online').textContent = onlineNow;
          document.getElementById('stat-today').textContent = today;
          document.getElementById('stat-week').textContent = thisWeek;
          document.getElementById('stat-month').textContent = thisMonth;
          document.getElementById('stat-total').textContent = total;

          setInterval(() => {
            let currentOnline = parseInt(document.getElementById('stat-online').textContent);
            let change = Math.floor(Math.random() * 3) - 1; 
            let newOnline = currentOnline + change;
            if (newOnline < 1) newOnline = 1;
            document.getElementById('stat-online').textContent = newOnline;
          }, 12000);
      }
    }
    
    window.onload = function() {
      simulateVisitorStats();
    };
  </script>

</body>
</html>