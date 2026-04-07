# Hi, I'm Natthawat (DerbSwag) 👋

**IT Infrastructure Engineer → DevOps Engineer**
Sole IT engineer in manufacturing environments (100+ users) — running real infrastructure across networking, firewall, server operations, and automation. Now building DevOps skills through a hands-on hybrid lab (Home Lab k3s + Company Lab Proxmox VE) with production-like stacks.

📍 Chonburi, Thailand  |  📧 natthawat.derb@gmail.com  |  💼 [github.com/DerbSwag](https://github.com/DerbSwag)

---

## 🏗️ Hybrid Lab Architecture

```
[ Company Lab — Proxmox VE Cluster ]
  ├── pve01 (i5-7400 / 16GB RAM)  ──┐
  └── pve02 (i3-8100 / 8GB RAM)   ──┴── 2-node Proxmox cluster
        ├── k8s-master    192.168.101.140
        ├── k8s-worker-01 192.168.101.141
        └── k8s-worker-02 192.168.101.142
              ├── Zabbix v7.0  — 14 hosts (K8s nodes, Windows servers, CCTV SNMP)
              ├── Prometheus + Grafana + Alertmanager → Lark
              ├── ArgoCD (GitOps, auto-sync)
              └── FastAPI (Helm chart)

[ Home Lab — k3s Single Node ]
  └── DevOpsLab 192.168.141.129
        ├── k3s — 8-level Kubernetes curriculum (all completed)
        ├── Prometheus + Grafana + Loki + Alertmanager → Discord
        ├── ArgoCD (auto-sync + self-heal on Helm drift)
        ├── cert-manager (self-signed TLS, ClusterIssuer)
        └── CI/CD: GitHub Actions → GHCR → Docker Compose deploy

[ Perimeter ]
  └── FortiGate 60F — VPN, NAT, VLAN segmentation, firewall policy
```

---

## 💻 Tech Stack

**Actively running in lab:**

`Docker` `Docker Compose` `Kubernetes (k3s)` `Helm` `ArgoCD`
`GitHub Actions` `Self-hosted Runner` `GHCR`
`Prometheus` `Grafana` `Loki` `Alertmanager` `Zabbix v7`
`Proxmox VE` `Ubuntu Server 24.04` `FastAPI` `PostgreSQL` `Python` `Bash`

**Kubernetes concepts mastered (verified in lab):**

`Deployments` `StatefulSet` `DaemonSet` `RBAC` `Ingress + TLS`
`cert-manager` `HPA` `NetworkPolicy` `Helm packaging` `GitOps (ArgoCD)`

**Enterprise IT (production experience):**

`FortiGate 60F` `MikroTik` `VLAN Segmentation` `VPN / NAT / Firewall`
`QNAP NAS` `VMware` `Backup & DR` `SQL Server` `PowerShell` `Google Workspace` `GLPI`

**Learning next:**

`Terraform` `Ansible` `Jenkins` `WireGuard VPN` `AWS / Azure fundamentals`

---

## 🚀 Projects

### [DevOps FastAPI Lab](https://github.com/DerbSwag/Devops-fastapi-lab)

Production-style hybrid lab running FastAPI across a full Kubernetes + GitOps + observability stack. Two real environments: Home Lab (k3s, single node) and Company Lab (3-node k3s cluster on Proxmox VE).

- **8-level Kubernetes curriculum** — Deployment → StatefulSet → DaemonSet → RBAC → Ingress/TLS → HPA → GitOps → Loki logging. Each level has real YAML, live verification, and a GitHub commit
- **CI/CD pipeline** — GitHub Actions builds image on push → GHCR → self-hosted runner triggers Docker Compose deploy. ArgoCD handles Helm sync with auto-sync and self-heal
- **Home Lab observability** — Prometheus + Grafana + Loki (loki-stack v2.10.3) + Alertmanager → Discord. HPA load-tested with in-pod CPU stress
- **Company Lab monitoring** — Zabbix v7.0 via Helm (PostgreSQL PV 10Gi) monitoring 14 hosts: K8s nodes, Windows servers, Proxmox nodes, Hikvision CCTV via SNMP v2c
- **Custom alerting adapter** — Python webhook pod bridging Alertmanager → Lark messaging platform
- **TLS & ingress** — cert-manager, self-signed ClusterIssuer, Nginx Ingress, HTTPS end-to-end verified
- **RBAC** — scoped ServiceAccounts, Role/ClusterRole bindings, verified with `kubectl auth can-i`

`k3s` `ArgoCD` `GitHub Actions` `Helm` `Prometheus` `Grafana` `Loki` `Alertmanager` `Zabbix` `Proxmox VE` `cert-manager` `FastAPI` `PostgreSQL` `Python`

---

### [Factory Attendance Dashboard](https://github.com/DerbSwag/factory_demo)

Desktop attendance system simulating employee time tracking in a manufacturing environment — built from real operational experience.

- Attendance status logic (Present / Absent / OT / Irregular) with overtime calculation engine
- Data processing pipeline with Python + Pandas; real-time filtering by department, date, and keyword
- Excel export with auto-generated filename and structured error handling
- Simulated realistic dataset: 40 employees across 13 departments (Faker); test suite with pytest

`Python` `Tkinter` `Pandas` `openpyxl` `Faker` `pytest`

---

### [Windows IT Automation Toolkit](https://github.com/DerbSwag/IT-Automation-Toolkit)

Production-oriented automation toolkit for IT endpoint onboarding, inventory collection, and GLPI asset management — built from real IT support workflows.

- Automated endpoint inventory collection via PowerShell (`Get-PCInfo.ps1`)
- Silent GLPI Agent deployment with network reachability validation
- Portable orchestration with admin self-elevation and centralized INI-based configuration
- Structured logging with timestamped entries; GitHub Actions CI validates file presence and PowerShell syntax

`PowerShell` `Batch Scripting` `GLPI` `GitHub Actions`

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

## 💼 Work Experience Highlights

**IT Infrastructure & System Operations Engineer** — PJ Chonburi Parawood Co., Ltd. *(Jun 2025 – Present)*
Sole IT engineer for a manufacturing facility (100+ users). Responsible for all networking, server ops, and automation.
- VLAN segmentation (Office / Server / CCTV) on FortiGate F60 — improved network isolation and stability
- Python ETL pipeline: SQL Server OT/HR data → Google Sheets automated reports — reduced ~3 hrs/week manual work to under 10 minutes
- PowerShell scripts for software deployment and system maintenance automation
- Backup & DR management including scheduled restore testing

**IT Infrastructure Support Engineer** — Yuan Lin (Thailand) Co., Ltd. *(Oct 2024 – May 2025)*
Sole IT engineer managing all infrastructure and end-user systems.
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

**In Progress:**
- 🔄 Loki/Grafana integration verification
- 🔄 Zabbix → Lark alert pipeline end-to-end test
- 🔄 bind9 DNS on VM103

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
