# 🗺️ DevOps Roadmap — Natthawat (DerbSwag)

> IT Infrastructure Engineer → DevOps Engineer
> Personal roadmap with real progress tracking

---

## 📍 Current Position: Mid-level Infrastructure + Automation

```
[IT Support] ──► [IT Infra Engineer] ──► [DevOps Engineer] ──► [Senior DevOps / Cloud]
                        ▲                       │
                   YOU ARE HERE            NEXT TARGET
```

---

## ✅ Phase 1: Foundation (COMPLETED)

> สิ่งที่ทำได้แล้ว — ไม่ต้องเรียนซ้ำ

| Skill | Status | Evidence |
|-------|--------|----------|
| Linux (Ubuntu Server) | ✅ Done | Running k3s + Proxmox VMs |
| Networking (VLAN, Firewall, VPN) | ✅ Done | FortiGate 60F production |
| Docker + Docker Compose | ✅ Done | FastAPI + Monitoring stack |
| Kubernetes (k3s) | ✅ Done | 8 levels completed |
| Helm | ✅ Done | FastAPI + Zabbix charts |
| CI/CD (GitHub Actions) | ✅ Done | Build → GHCR → Deploy |
| GitOps (ArgoCD) | ✅ Done | Auto-sync + self-heal |
| Monitoring (Prometheus + Grafana) | ✅ Done | Both labs |
| Logging (Loki) | ✅ Done | Home Lab |
| Alerting (Alertmanager) | ✅ Done | Discord + Lark |
| Zabbix | ✅ Done | v7.0, 14 hosts, SNMP |
| Python Automation | ✅ Done | ETL, OT calc, scripts |
| PowerShell / Batch | ✅ Done | GLPI toolkit, inventory |
| cert-manager (TLS) | ✅ Done | Self-signed ClusterIssuer |
| RBAC | ✅ Done | ServiceAccount, Role, ClusterRole |
| HPA (Auto-scaling) | ✅ Done | CPU-triggered, load tested |

---

## 🔥 Phase 2: Cloud + IaC (IN PROGRESS)

> เป้าหมาย: Deploy production system บน Cloud ด้วย IaC

| Skill | Status | Target | Project |
|-------|--------|--------|---------|
| **Terraform** | 🔄 Started | Provision AWS infra with code | [aws-terraform-lab](https://github.com/DerbSwag/aws-terraform-lab) |
| **AWS EC2 + VPC** | 📋 Next | Deploy app on AWS | aws-terraform-lab |
| **AWS S3** | 📋 Planned | Static files + Terraform state | — |
| **AWS IAM** | 📋 Planned | Least-privilege access | — |
| **Ansible** | 📋 Planned | Config management across labs | — |

### Phase 2 Milestones
- [ ] `terraform apply` deploys VPC + EC2 + FastAPI on AWS
- [ ] Terraform remote state on S3
- [ ] Ansible playbook configures server
- [ ] CI/CD deploys to AWS automatically

---

## 🎯 Phase 3: Production-Grade (PLANNED)

> เป้าหมาย: ออกแบบระบบระดับ production ได้

| Skill | Status | Why |
|-------|--------|-----|
| AWS ALB (Load Balancer) | 📋 | High availability |
| AWS RDS | 📋 | Managed database |
| AWS Route53 | 📋 | DNS management |
| Multi-AZ deployment | 📋 | Fault tolerance |
| WireGuard/Tailscale VPN | 📋 | Site-to-site tunnel |
| Jenkins | 📋 | Self-hosted CI alternative |
| ELK Stack | 📋 | Enterprise logging |

---

## 🚀 Phase 4: Senior Level (FUTURE)

| Skill | Why |
|-------|-----|
| Multi-cloud (AWS + GCP) | Avoid vendor lock-in |
| Service Mesh (Istio) | Microservice communication |
| Chaos Engineering | Resilience testing |
| Architecture Design | System design interviews |
| Team Leadership | Mentor junior engineers |

---

## 📊 Skill Matrix

```
                    Beginner    Junior    Mid    Senior
Linux               ─────────────────────█──────
Networking          ─────────────────────█──────
Docker              ─────────────────────█──────
Kubernetes          ────────────────────█───────
CI/CD               ────────────────────█───────
Monitoring          ─────────────────────█──────
Python              ────────────────────█───────
Terraform           ────────█───────────────────  ← Learning
AWS                 ───────█────────────────────  ← Next
Ansible             ──────█─────────────────────  ← Planned
```

---

## 💰 Career Target

| Timeline | Position | Salary Range |
|----------|----------|-------------|
| **Now** | IT Infra + Automation Engineer | 18-25k |
| **3-6 months** | DevOps Engineer (Junior-Mid) | 30-45k |
| **1-2 years** | DevOps / Cloud Engineer (Mid) | 50-80k |
| **3+ years** | Senior DevOps / SRE | 80-120k+ |

---

## 📁 Portfolio Projects

| Project | Stack | Link |
|---------|-------|------|
| DevOps FastAPI Lab | K8s, ArgoCD, Prometheus, Grafana, Loki, Zabbix | [Repo](https://github.com/DerbSwag/Devops-fastapi-lab) |
| AWS Terraform Lab | Terraform, AWS, Docker, Nginx | [Repo](https://github.com/DerbSwag/aws-terraform-lab) |
| IT Automation Toolkit | PowerShell, GLPI API, PHP, GitHub Actions | [Repo](https://github.com/DerbSwag/IT-Automation-Toolkit) |
| Factory Attendance | Python, Pandas, Tkinter, pytest | [Repo](https://github.com/DerbSwag/factory_demo) |
| MeowN Website | HTML/CSS/JS, Vercel | [Live](https://meown-website.vercel.app/) |
| Zone Sleep Hotel | HTML/CSS/JS, i18n, QRCode.js | [Live](https://zone-sleep-hotel.vercel.app/) |

---

*Last updated: April 2026*
*"Building real infrastructure. Every level committed to Git."*
