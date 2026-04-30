# 🎤 Interview Cheat Sheet — DevOps / Infrastructure Engineer

> เปิดอ่านก่อนสัมภาษณ์ — อธิบายแบบ "เล่าเรื่อง" จากงานจริง ไม่ใช่ท่องจำ

---

## 🐳 Docker

**ถ้าถูกถาม: "Docker คืออะไร? ใช้ยังไง?"**

> "ผมใช้ Docker ในงานจริงครับ — ตอนทำระบบ monitoring ผมต้อง run Prometheus, Grafana, Alertmanager พร้อมกัน ถ้าติดตั้งทีละตัวบน server จะยุ่งมาก ก็เลยเขียน `docker-compose.yml` ให้ทุกอย่าง run ใน container สั่ง `docker compose up -d` ทีเดียวจบ ถ้าอยากลบก็ `down` ไม่กระทบ server เลย"

**ถ้าถามลึก: "Docker ต่างจาก VM ยังไง?"**

> "VM มันจำลองทั้ง OS เลย หนักมาก ใช้ RAM เยอะ แต่ Docker แค่ share kernel ของ host แล้ว isolate แค่ app กับ dependencies — เบากว่า เร็วกว่า start ใน 1-2 วินาที ผมใช้ทั้งสองอย่าง VM ใช้บน Proxmox สร้าง server, Docker ใช้ run app บน server นั้นอีกที"

---

## ☸️ Kubernetes

**ถ้าถูกถาม: "Kubernetes คืออะไร? ทำไมต้องใช้?"**

> "ถ้ามี container ตัวเดียว Docker ก็พอ แต่ถ้ามีหลายตัว ต้องการ auto-restart, auto-scale, load balance — ต้องใช้ Kubernetes มาจัดการ ผมตั้ง k3s cluster ไว้ 2 ที่ — Home Lab 1 node กับ Company Lab 3 nodes บน Proxmox ใช้ deploy FastAPI app จริง"

**ถ้าถามลึก: "เคยใช้อะไรบ้างใน K8s?"**

> "ผมทำครบ 8 levels ครับ — Deployment, StatefulSet สำหรับ PostgreSQL, DaemonSet, RBAC กำหนดสิทธิ์, Ingress + TLS ด้วย cert-manager, HPA auto-scale ตาม CPU ผมทดสอบด้วยการ stress CPU ใน pod แล้วดูมัน scale จาก 1 เป็น 3 replicas จริงๆ"

---

## 🔄 CI/CD (GitHub Actions)

**ถ้าถูกถาม: "CI/CD คืออะไร?"**

> "CI คือทุกครั้งที่ push โค้ด ระบบจะ build และ test อัตโนมัติ CD คือ deploy อัตโนมัติ ผมตั้ง GitHub Actions ไว้ — push โค้ด → build Docker image → push ขึ้น GHCR → ArgoCD detect แล้ว sync เข้า Kubernetes ให้เลย ไม่ต้อง SSH เข้าไป deploy เอง"

**ถ้าถามลึก: "ArgoCD คืออะไร?"**

> "ArgoCD เป็น GitOps tool ครับ — มันดูว่า Helm chart ใน Git ตรงกับที่ run อยู่ใน K8s ไหม ถ้าไม่ตรง มัน auto-sync ให้ ผมเปิด self-heal ด้วย ถ้าใครไปแก้ K8s ตรงๆ มันจะ revert กลับให้ตรงกับ Git เสมอ"

---

## 📊 Monitoring (Prometheus + Grafana)

**ถ้าถูกถาม: "ทำ monitoring ยังไง?"**

> "ผมใช้ Prometheus เก็บ metrics จาก app และ server แล้วแสดงผลบน Grafana dashboard ถ้ามีปัญหา Alertmanager จะส่งแจ้งเตือนไป Discord (Home Lab) หรือ Lark (Company Lab) อัตโนมัติ นอกจากนี้ยังใช้ Loki เก็บ log ดูผ่าน Grafana ได้เลย ไม่ต้อง SSH เข้าไปอ่าน log"

**ถ้าถามลึก: "Zabbix ต่างจาก Prometheus ยังไง?"**

> "Prometheus เหมาะกับ container/K8s เพราะ pull metrics ผ่าน HTTP ส่วน Zabbix เหมาะกับ traditional infra เช่น Windows server, กล้อง CCTV ผ่าน SNMP ผมใช้ทั้งสองอย่าง — Prometheus สำหรับ K8s, Zabbix สำหรับ 14 hosts ที่เป็น Windows + CCTV"

---

## 🏗️ Terraform

**ถ้าถูกถาม: "Terraform คืออะไร?"**

> "แทนที่จะกดสร้าง server บน AWS Console ทีละอัน ผมเขียน Terraform เป็นโค้ด — สั่ง `terraform apply` ทีเดียว มันสร้าง VPC, Subnet, Security Group, EC2 ให้หมด ถ้าอยากลบก็ `terraform destroy` จบ ข้อดีคือ infra เป็นโค้ด version control ได้ ใครมาทำต่อก็อ่านเข้าใจ"

---

## 🤖 Ansible

**ถ้าถูกถาม: "Ansible คืออะไร? ต่างจาก Terraform ยังไง?"**

> "Terraform สร้าง infra เช่น สร้าง server ส่วน Ansible config server เช่น ติดตั้ง Docker, ตั้งค่า firewall ผมเขียน playbook ไว้ — สั่ง `ansible-playbook setup-docker.yml` มันจะ SSH เข้าไปติดตั้ง Docker ให้ทุก server ที่กำหนดไว้ ไม่ต้องทำทีละเครื่อง"

---

## 🔒 Networking & Firewall

**ถ้าถูกถาม: "เคยทำ network อะไรบ้าง?"**

> "ผมดูแล network ทั้งโรงงานครับ 100+ users ตั้ง VLAN segmentation บน FortiGate 60F แยก Office / Server / CCTV ออกจากกัน ทำ VPN, NAT, Firewall policy ถ้า CCTV โดน hack ก็ไม่กระทบ Office network"

---

## 🐍 Python Automation

**ถ้าถูกถาม: "ใช้ Python ทำอะไรบ้าง?"**

> "ผมใช้ Python หลายอย่างครับ — ทำ ETL pipeline ดึงข้อมูล OT จาก SQL Server ส่งเข้า Google Sheets อัตโนมัติ จากที่ HR ต้องทำเอง 3 ชม./สัปดาห์ เหลือไม่ถึง 10 นาที นอกจากนี้ยังเขียน automation pipeline สำหรับ process content แล้ว distribute ไปหลาย platform พร้อมกัน"

---

## 💻 PowerShell / GLPI

**ถ้าถูกถาม: "เคยทำ automation อะไรในองค์กร?"**

> "ผมสร้าง IT Automation Toolkit ครับ — เวลามีเครื่องใหม่เข้ามา แค่รัน script ตัวเดียว มันจะเก็บข้อมูลเครื่อง ติดตั้ง GLPI Agent ลงทะเบียนเข้าระบบ asset management ให้หมด จากเดิมใช้เวลา 45 นาที/เครื่อง เหลือ 5 นาที นอกจากนี้ยังทำหน้าเว็บให้พนักงานลงทะเบียนเครื่องเองได้"

---

## 🌐 Web Development

**ถ้าถูกถาม: "ทำเว็บเป็นด้วย?"**

> "ครับ ผมทำเว็บไซต์ได้ — เคยทำ company profile website แบบ dark premium design มี admin dashboard จัดการ leads, แก้ไขเนื้อหา, ดูสถิติ อีกอันเป็นเว็บโรงแรมมีระบบจองห้องพัก 3 ขั้นตอน สลับภาษาไทย-อังกฤษได้ มี QR Code บนใบเสร็จ ทั้งหมดเขียนด้วย HTML/CSS/JS ล้วน ไม่ใช้ framework"

---

## 📡 VPS & Streaming

**ถ้าถูกถาม: "เคย deploy อะไรบน cloud?"**

> "ผม deploy ระบบ streaming อัตโนมัติบน Google Cloud VPS ครับ — เขียน Python + FFmpeg ให้ stream 24/7 มี health check script ตรวจสอบทุก 5 นาที ถ้า stream ล่มจะแจ้งเตือนผ่าน LINE แล้ว auto-restart ทั้งหมด provision ด้วย shell script ตัวเดียว"

---

## 🎯 คำถามทั่วไป

**"ทำไมอยากเปลี่ยนจาก IT Support เป็น DevOps?"**

> "ผมไม่ได้เป็นแค่ IT Support ครับ — ผมดูแล infra ทั้งโรงงาน network, server, firewall, automation ทั้งหมด แต่ตำแหน่งมันถูกเรียกว่า IT Support ผมอยากไปอยู่ในตำแหน่งที่ตรงกับสิ่งที่ทำจริง ซึ่งก็คือ DevOps / Infrastructure Engineer"

**"จุดแข็งของคุณคืออะไร?"**

> "ผมทำได้ทั้ง infra และ automation ครับ — ไม่ใช่แค่ตั้ง server ได้ แต่เขียน script ให้มัน automate ได้ด้วย ตั้งแต่ provisioning, deployment, monitoring จนถึง alerting ทุกอย่างมี project จริงบน GitHub ให้ดู"

**"มี project อะไรภูมิใจที่สุด?"**

> "DevOps FastAPI Lab ครับ — ผมสร้าง hybrid lab 2 ที่ Home Lab กับ Company Lab มี Kubernetes, CI/CD, GitOps, Monitoring ครบ ทุก level ผม commit ไว้บน GitHub มี YAML จริง มี verification จริง ไม่ใช่แค่ดูคอร์ส"

---

## 💰 คำถามเรื่องเงินเดือน

**"คาดหวังเงินเดือนเท่าไหร่?"**

> "30,000-45,000 ครับ — based on skill set ที่ผมมี ซึ่งครอบคลุม Kubernetes, CI/CD, Monitoring, Automation, Networking ทั้งหมดมี project จริงรองรับ"

---

*เปิดอ่านก่อนสัมภาษณ์ 30 นาที — ไม่ต้องท่อง แค่ทบทวน*
