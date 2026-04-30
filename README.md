# Hi, I'm Natthawat (DerbSwag) 👋

**IT Infrastructure Engineer → DevOps Engineer**

Sole IT engineer in manufacturing environments (100+ users) — running real infrastructure across networking, firewall, server operations, and automation. Now building DevOps skills through a hands-on hybrid lab (Home Lab k3s + Company Lab Proxmox VE) with production-like stacks.

📍 Chonburi, Thailand  |  📧 natthawat.derb@gmail.com  |  💼 [github.com/DerbSwag](https://github.com/DerbSwag)

<p align="center">
  <img src="https://github-readme-stats.vercel.app/api?username=DerbSwag&show_icons=true&theme=tokyonight&hide_border=true&bg_color=0D1117&title_color=58a6ff&icon_color=58a6ff&text_color=c9d1d9" height="160" />
  <img src="https://github-readme-streak-stats.herokuapp.com/?user=DerbSwag&theme=tokyonight&hide_border=true&background=0D1117&ring=58a6ff&fire=ff6e40&currStreakLabel=58a6ff" height="160" />
</p>

---

## 💻 Tech Stack

<p align="center">
  <img src="https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white" />
  <img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" />
  <img src="https://img.shields.io/badge/Kubernetes-326CE5?style=for-the-badge&logo=kubernetes&logoColor=white" />
  <img src="https://img.shields.io/badge/Helm-0F1689?style=for-the-badge&logo=helm&logoColor=white" />
  <img src="https://img.shields.io/badge/ArgoCD-EF7B4D?style=for-the-badge&logo=argo&logoColor=white" />
  <img src="https://img.shields.io/badge/GitHub_Actions-2088FF?style=for-the-badge&logo=github-actions&logoColor=white" />
  <img src="https://img.shields.io/badge/Prometheus-E6522C?style=for-the-badge&logo=prometheus&logoColor=white" />
  <img src="https://img.shields.io/badge/Grafana-F46800?style=for-the-badge&logo=grafana&logoColor=white" />
  <img src="https://img.shields.io/badge/Proxmox-E57000?style=for-the-badge&logo=proxmox&logoColor=white" />
  <img src="https://img.shields.io/badge/Linux-FCC624?style=for-the-badge&logo=linux&logoColor=black" />
  <img src="https://img.shields.io/badge/Bash-4EAA25?style=for-the-badge&logo=gnu-bash&logoColor=white" />
  <img src="https://img.shields.io/badge/PowerShell-5391FE?style=for-the-badge&logo=powershell&logoColor=white" />
  <img src="https://img.shields.io/badge/PostgreSQL-4169E1?style=for-the-badge&logo=postgresql&logoColor=white" />
  <img src="https://img.shields.io/badge/FastAPI-009688?style=for-the-badge&logo=fastapi&logoColor=white" />
  <img src="https://img.shields.io/badge/FortiGate-EE3124?style=for-the-badge&logo=fortinet&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/Kotlin-7F52FF?style=for-the-badge&logo=kotlin&logoColor=white" />
  <img src="https://img.shields.io/badge/Vercel-000000?style=for-the-badge&logo=vercel&logoColor=white" />
</p>

**Actively running in lab:**
`Docker` `Docker Compose` `Kubernetes (k3s)` `Helm` `ArgoCD` `GitHub Actions` `Self-hosted Runner` `GHCR` `Prometheus` `Grafana` `Loki` `Alertmanager` `Zabbix v7` `Proxmox VE` `Ubuntu Server 24.04` `FastAPI` `PostgreSQL` `Python` `Bash`

**Kubernetes concepts mastered (verified in lab):**
`Deployments` `StatefulSet` `DaemonSet` `RBAC` `Ingress + TLS` `cert-manager` `HPA` `NetworkPolicy` `Helm packaging` `GitOps (ArgoCD)`

**Enterprise IT (production experience):**
`FortiGate 60F` `MikroTik` `VLAN Segmentation` `VPN / NAT / Firewall` `QNAP NAS` `VMware` `Backup & DR` `SQL Server` `PowerShell` `Google Workspace` `GLPI`

**Learning next:**
`Terraform` `Ansible` `Jenkins` `WireGuard VPN` `AWS / Azure fundamentals`

---

## 🏗️ Hybrid Lab Architecture

```
[ Company Lab — Proxmox VE Cluster ]
  ├── pve01 (i5-7400 / 16GB RAM)  ──┐
  └── pve02 (i3-8100 / 8GB RAM)   ──┴── 2-node Proxmox cluster
        ├── k8s-master
        ├── k8s-worker-01
        └── k8s-worker-02
              ├── Zabbix v7.0  — 14 hosts (K8s nodes, Windows servers, CCTV SNMP)
              ├── Prometheus + Grafana + Alertmanager → Lark
              ├── ArgoCD (GitOps, auto-sync)
              └── FastAPI (Helm chart)

[ Home Lab — k3s Single Node ]
  └── DevOpsLab
        ├── k3s — 8-level Kubernetes curriculum (all completed)
        ├── Prometheus + Grafana + Loki + Alertmanager → Discord
        ├── ArgoCD (auto-sync + self-heal on Helm drift)
        ├── cert-manager (self-signed TLS, ClusterIssuer)
        └── CI/CD: GitHub Actions → GHCR → Docker Compose deploy

[ Perimeter ]
  └── FortiGate 60F — VPN, NAT, VLAN segmentation, firewall policy
```

---

## 🚀 Projects

### 🔧 DevOps & Infrastructure

### [DevOps FastAPI Lab](https://github.com/DerbSwag/Devops-fastapi-lab)
Production-style hybrid lab running FastAPI across a full Kubernetes + GitOps + observability stack.

- **8-level Kubernetes curriculum** — Deployment → StatefulSet → DaemonSet → RBAC → Ingress/TLS → HPA → GitOps → Loki logging
- **CI/CD pipeline** — GitHub Actions → GHCR → self-hosted runner → Docker Compose. ArgoCD handles Helm sync with auto-sync and self-heal
- **Observability** — Prometheus + Grafana + Loki + Alertmanager → Discord/Lark
- **Company Lab** — Zabbix v7.0 monitoring 14 hosts including Hikvision CCTV via SNMP v2c

`k3s` `ArgoCD` `GitHub Actions` `Helm` `Prometheus` `Grafana` `Loki` `Zabbix` `Proxmox VE` `FastAPI` `PostgreSQL`

---

### [Windows IT Automation Toolkit](https://github.com/DerbSwag/IT-Automation-Toolkit)
Production toolkit for endpoint onboarding, GLPI asset management, and Lark integration — used daily managing 100+ users.

- **Endpoint automation** — One-click inventory collection + silent GLPI Agent deployment
- **GLPI API scripts** — Create department groups, bulk fix device status, auto-register devices
- **Web registration portal** — Self-service device registration (PHP + GLPI API)
- **Lark integration** — Bridge GLPI notifications → Lark messaging
- **Impact** — Reduced endpoint onboarding from ~45 min to ~5 min per device

`PowerShell` `Batch` `PHP` `GLPI API` `GitHub Actions`

---

### [Factory Attendance Dashboard](https://github.com/DerbSwag/factory_demo)
Desktop attendance system simulating employee time tracking in a manufacturing environment.

- Attendance status logic (Present / Absent / OT / Irregular) with overtime calculation
- Data processing with Python + Pandas; real-time filtering by department, date, keyword
- Excel export with auto-generated filename; test suite with pytest

`Python` `Tkinter` `Pandas` `openpyxl` `Faker` `pytest`

---

### 🌐 Web Development

### [เหมียวเอ็น MeowN — Premium Cat Services](https://meown-website.vercel.app/)
Company profile website — Dark premium design with Aurora background, 3D effects, glassmorphism, custom cursor.

- **6 pages** — Hero + Services + About + Portfolio + Reviews + FAQ + Contact + 4 Service Detail Pages
- **Admin Dashboard** — Lead management, content editor, analytics, backup system
- **Advanced UI** — Aurora background, custom cursor, 3D tilt card, scroll reveal animations

🔗 [Live Demo](https://meown-website.vercel.app/) · `HTML5` `CSS3` `JavaScript` `Vercel`

---

### [Zone Sleep Hotel — Luxury Boutique Hotel](https://zone-sleep-hotel.vercel.app/)
Full-stack hotel website with complete booking system, i18n (TH/EN), and admin dashboard.

- **3-step booking** — Guest info → Payment/slip upload → Receipt + QR Code
- **i18n** — Thai/English language switching
- **Admin** — Login + 24hr session, booking management, room CRUD, settings
- **Database** — localStorage module with locking mechanism

🔗 [Live Demo](https://zone-sleep-hotel.vercel.app/) · `HTML5` `CSS3` `JavaScript` `QRCode.js` `Vercel`

---

## 📊 Infrastructure Status

| Component | Environment | Status |
|---|---|---|
| k3s cluster (3-node) | Company Lab (Proxmox) | ✅ Running |
| k3s single node | Home Lab | ✅ Running |
| ArgoCD GitOps | Both | ✅ Running |
| Prometheus + Grafana | Both | ✅ Running |
| Loki logging stack | Home Lab | ✅ Running |
| Zabbix v7 (14 hosts) | Company Lab | ✅ Running |
| Alertmanager → Discord | Home Lab | ✅ Running |
| Alertmanager → Lark | Company Lab | ✅ Running |
| CI/CD (Actions + GHCR) | Home Lab | ✅ Running |
| FortiGate 60F (perimeter) | Company Lab | ✅ Running |
| bind9 DNS server | Company Lab | 🔄 In Progress |
| VPN tunnel (Home ↔ Company) | Both | 📋 Planned |
| Terraform IaC | Both | 📋 Planned |
| Ansible config management | Both | 📋 Planned |

---

## 💼 Work Experience

**IT Infrastructure & System Operations Engineer** — PJ Chonburi Parawood Co., Ltd. *(Jun 2025 – Present)*

Sole IT engineer for a manufacturing facility (100+ users). Responsible for all networking, server ops, and automation.

- VLAN segmentation (Office / Server / CCTV) on FortiGate 60F — improved network isolation and stability
- Python ETL pipeline: SQL Server OT/HR data → Google Sheets — reduced ~3 hrs/week to under 10 minutes
- PowerShell + GLPI automation toolkit — endpoint onboarding from ~45 min to ~5 min per device
- Backup & DR management including scheduled restore testing

**IT Infrastructure Support Engineer** — Yuan Lin (Thailand) Co., Ltd. *(Oct 2024 – May 2025)*

- QNAP NAS: file sharing, backup configuration, access control
- MikroTik network administration and VLAN segmentation
- Remote support via AnyDesk — reduced response time and minimized downtime

---

## 📚 Kubernetes Learning Path

**Completed (Levels 1–8):**
- ✅ L1–L2: Deployment fundamentals, resource management
- ✅ L3: StatefulSet (PostgreSQL with PersistentVolume)
- ✅ L4: DaemonSet, NetworkPolicy
- ✅ L5: RBAC — ServiceAccount, Role, ClusterRoleBinding
- ✅ L6: Ingress + TLS with cert-manager (self-signed)
- ✅ L7: HPA — load testing, verified CPU-triggered scaling
- ✅ L8: GitOps (ArgoCD auto-sync + self-heal) + Loki logging stack

**Coming Next:**
- 🎯 Terraform — Proxmox VM provisioning (IaC)
- 🎯 Ansible — cross-lab config management
- 🎯 WireGuard/Tailscale VPN — site-to-site tunnel (Home ↔ Company)
- 🎯 Jenkins — self-hosted CI server

---

## 🎓 Education & Certifications

**Diploma — Digital Business Technology**
Bangkok Technical Business Administration Vocational College | GPA: 3.36

**Certifications:**
- Google AI Essentials — Google
- Google Prompting Essentials — Google
- Python Programming — FutureSkill
- GitHub for Developers — BorntoDev
- Google UX Design — Google

---

## 📫 Connect

- 📧 natthawat.derb@gmail.com
- 📍 Chonburi, Thailand
- 💼 [github.com/DerbSwag](https://github.com/DerbSwag)

Open to: DevOps / Infrastructure Engineer roles, automation collaborations, homelab discussions

---

*Building real infrastructure. Every level committed to Git.*
