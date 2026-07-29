# Hi, I'm Natthawat (DerbSwag)

IT/System Infrastructure Engineer based in Chonburi, Thailand.

I work as the primary hands-on IT engineer in a manufacturing environment supporting 100+ users, covering networking, FortiGate firewall, Windows/Linux servers, monitoring, automation, backup operations, and day-to-day IT support.

I am building toward Cloud/DevOps roles through practical labs with Proxmox VE, k3s Kubernetes, ArgoCD, Terraform, Ansible, Prometheus, Grafana, Loki, Zabbix, and GitHub Actions.

Chonburi, Thailand | natthawat.derb@gmail.com | [github.com/DerbSwag](https://github.com/DerbSwag)

![Kubernetes](https://img.shields.io/badge/Kubernetes-326CE5?style=flat&logo=kubernetes&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-2496ED?style=flat&logo=docker&logoColor=white)
![Terraform](https://img.shields.io/badge/Terraform-7B42BC?style=flat&logo=terraform&logoColor=white)
![Ansible](https://img.shields.io/badge/Ansible-EE0000?style=flat&logo=ansible&logoColor=white)
![Python](https://img.shields.io/badge/Python-3776AB?style=flat&logo=python&logoColor=white)
![PowerShell](https://img.shields.io/badge/PowerShell-5391FE?style=flat&logo=powershell&logoColor=white)
![Prometheus](https://img.shields.io/badge/Prometheus-E6522C?style=flat&logo=prometheus&logoColor=white)
![Grafana](https://img.shields.io/badge/Grafana-F46800?style=flat&logo=grafana&logoColor=white)

---

## Career Focus

Infrastructure Engineer -> Cloud/DevOps -> Platform / DevSecOps

Strongest areas:

- Infrastructure operations for manufacturing IT environments
- FortiGate firewall, VLAN segmentation, VPN, NAT, and network troubleshooting
- Windows/Linux server support, endpoint operations, and monitoring
- Zabbix, Prometheus, Grafana, Loki, and alerting workflows
- Python, PowerShell, Bash, SQL, and GLPI API automation
- Proxmox, Kubernetes, GitOps, Terraform, and Ansible labs

---

## Current Focus

- Hybrid Infrastructure Lab: Proxmox VE, k3s, ArgoCD, monitoring, and infrastructure documentation
- Windows IT Automation: endpoint onboarding, inventory collection, GLPI asset workflows, and Zabbix Agent deployment
- AWS Terraform Lab: practicing Terraform with VPC, EC2, security groups, user data, CI validation, and planned ALB/RDS expansion
- AI-assisted Lab Work: using AI tools for documentation, troubleshooting notes, README cleanup, and RAG/LLMOps learning experiments

---

## Featured Projects

### Production-Inspired / Public-Safe Demos

These repositories are public-safe versions of workflows inspired by real operational work. Sensitive company-specific data, endpoints, credentials, hostnames, and internal topology details are removed or replaced with dummy data.

#### [Windows IT Automation Toolkit](https://github.com/DerbSwag/IT-Automation-Toolkit)

Public-safe demo version of an internal Windows IT automation toolkit used for endpoint onboarding, inventory collection, GLPI asset workflows, and Zabbix Agent deployment.

- One-click inventory collection and silent GLPI Agent deployment workflow
- GLPI API scripts for asset registration and device status update practice
- Zabbix Agent deployment helper for monitored endpoints
- Internal impact: reduced endpoint onboarding from about 45 minutes to about 5 minutes per device

`PowerShell` `Batch` `PHP` `GLPI API` `Zabbix` `Windows`

#### [Factory Attendance Dashboard](https://github.com/DerbSwag/factory_demo)

Public-safe demo version of an internal attendance and OT workflow concept, rebuilt with dummy data for portfolio sharing.

- Attendance status logic and OT calculation workflow
- Filtering by department, date, and keyword
- Excel export and pytest-based test suite
- Company-specific data, employee records, and internal logic sanitized

`Python` `Tkinter` `Pandas` `openpyxl` `pytest`

---

### Infrastructure / DevOps Learning Labs

These projects are hands-on learning labs built to practice infrastructure, automation, DevOps, observability, and GitOps. They are not production systems, but they follow realistic operational patterns where possible.

#### [Proxmox k3s Infrastructure Lab](https://github.com/DerbSwag/proxmox-k8s-infra)

Public-safe infrastructure lab based on real hands-on infrastructure practice, covering virtualization, Kubernetes, GitOps, monitoring, automation, backup workflows, and runbook documentation.

- Proxmox VE cluster lab running a multi-node k3s Kubernetes environment
- ArgoCD GitOps workflow with auto-sync, repository authentication recovery, app change, and self-heal practice
- Zabbix v7 monitoring practice for servers, Kubernetes nodes, Windows hosts, and SNMP devices
- Prometheus, Grafana, Loki, Alertmanager, dashboard, and alerting labs
- PostgreSQL backup, remote backup copy, checksum verification, and cleanup/runbook practice
- Terraform and Ansible infrastructure automation practice

`Proxmox VE` `k3s` `ArgoCD` `Terraform` `Ansible` `Zabbix` `Prometheus` `Grafana` `Loki`

#### [DevOps FastAPI Lab](https://github.com/DerbSwag/Devops-fastapi-lab)

Hands-on DevOps learning lab using FastAPI to practice Docker, Kubernetes, GitOps, CI/CD, and observability.

- Kubernetes practice: Deployment, StatefulSet, DaemonSet, RBAC, Ingress/TLS, HPA, GitOps, and Loki logging
- CI/CD practice with GitHub Actions, GHCR, Docker, Helm, and ArgoCD
- Observability practice with Prometheus, Grafana, Loki, and Alertmanager

`FastAPI` `Docker` `Kubernetes` `Helm` `GitHub Actions` `GHCR` `ArgoCD` `Prometheus` `Grafana` `Loki`

#### [AWS Terraform Lab](https://github.com/DerbSwag/aws-terraform-lab)

Hands-on AWS Infrastructure-as-Code lab using Terraform to practice provisioning cloud infrastructure for a Docker/FastAPI deployment.

- VPC, EC2, security groups, and basic network layout
- Docker and Nginx bootstrap through EC2 user data
- CI checks for Terraform formatting and validation
- Planned practice areas: ALB, RDS, Route 53, and remote state

`Terraform` `AWS` `EC2` `VPC` `Docker` `Nginx` `FastAPI`

#### [Ansible Playbooks Lab](https://github.com/DerbSwag/ansible-playbooks)

Hands-on Ansible lab for practicing Linux provisioning, Docker deployment, monitoring setup, and basic hardening.

- Docker setup and FastAPI deployment automation
- Monitoring stack templates for Prometheus/Grafana workflows
- Linux configuration and security hardening practice

`Ansible` `Jinja2` `Docker` `Ubuntu` `Prometheus` `Grafana`

---

### AI-Assisted Learning / Documentation Labs

#### [LLMOps Platform Lab](https://github.com/DerbSwag/llmops-platform-lab)

Hands-on learning lab for exploring LLM gateway, RAG pipeline, security guardrails, and observability concepts with AI-assisted development support.

- FastAPI-based LLM gateway pattern
- RAG pipeline and prompt/security guard concept practice
- Prometheus and Grafana observability practice for AI service experiments
- Built with AI-assisted documentation, troubleshooting, and implementation support

`Python` `Docker` `FastAPI` `RAG` `Prometheus` `Grafana`

#### [DevOps Assistant Agent Lab](https://github.com/DerbSwag/devops-assistant-agent)

Hands-on RAG assistant lab using Google Cloud Agent Builder and Gemini to explore DevOps knowledge-base question answering.

- Knowledge-base assistant concept for infrastructure and DevOps notes
- Gemini-based RAG workflow experiment
- AI-assisted learning workflow for support notes, documentation, and troubleshooting practice

`Google Cloud` `Gemini` `RAG` `Python` `Terraform` `Ansible`

---

### Additional Automation / Web Practice

Beyond the featured repositories, I also maintain smaller automation, documentation, and web practice projects. These include internal IT scripts, SOP/policy documents, frontend demos, and workflow experiments for recurring support tasks.

Public-facing demos are sanitized and use dummy data where needed.

Examples: `content-automation-pipeline`, `MeowN`, `Zone Sleep Hotel`, internal IT guides, endpoint scripts, and policy documentation.

---

## Production Experience

### IT Support - Scope: IT/System Infrastructure Operations

PJ Chonburi Parawood Co., Ltd. | Jun 2025 - Present

Primary hands-on IT engineer for a manufacturing facility with 100+ users.

- Maintained FortiGate firewall, VLAN segmentation, SSL VPN, NAT, and network troubleshooting
- Supported Windows/Linux servers, factory systems, endpoints, printers, CCTV, and user operations
- Deployed Zabbix v7 monitoring for servers, Kubernetes nodes, Windows hosts, and CCTV/SNMP devices
- Built Python ETL workflow: SQL Server OT/HR data to Google Sheets, reducing about 3 hours/week to under 10 minutes
- Built PowerShell/Batch automation for endpoint onboarding, inventory collection, GLPI workflows, and Zabbix Agent deployment
- Created SOP, runbook, handover, and incident documentation for recurring IT operations
- Managed backup operations and basic restore checks; currently strengthening DR planning and restore-test process

### IT Infrastructure Support Engineer

Yuan Lin (Thailand) Co., Ltd. | Oct 2024 - May 2025

- Administered MikroTik network, VLAN segmentation, and QNAP NAS operations
- Managed GLPI helpdesk, remote support, endpoint support, and user troubleshooting
- Maintained company website, SEO updates, and Google Business Profile

---

## Lab Environment

```text
[ Company Lab - Proxmox VE / k3s ]
  - Proxmox VE cluster practice
  - Multi-node k3s Kubernetes lab
  - Zabbix v7 monitoring for servers, Kubernetes nodes, Windows hosts, and SNMP devices
  - Prometheus + Grafana + Loki + Alertmanager
  - ArgoCD GitOps labs
  - Terraform + Ansible infrastructure automation practice

[ Home Lab - k3s ]
  - Kubernetes learning path
  - Prometheus + Grafana + Loki + Alertmanager
  - ArgoCD auto-sync and self-heal practice
  - cert-manager and Ingress/TLS labs
  - GitHub Actions -> GHCR -> Docker/Helm deployment practice

[ Perimeter / Network Practice ]
  - FortiGate firewall policy, VPN, NAT, VLAN segmentation, and network troubleshooting
```

---

## Tech Stack

Production / hands-on work:

`FortiGate` `MikroTik` `VLAN` `SSL VPN` `NAT` `Firewall Policy` `Windows Server` `Linux` `Zabbix v7` `GLPI` `SQL Server` `QNAP NAS` `PowerShell` `Python` `Bash` `Google Workspace`

Lab / portfolio:

`Proxmox VE` `k3s` `Docker` `Kubernetes` `Helm` `ArgoCD` `GitHub Actions` `GHCR` `Terraform` `Ansible` `Prometheus` `Grafana` `Loki` `Alertmanager` `FastAPI` `PostgreSQL` `AWS`

Learning next:

`AWS` `Veeam` `AD/GPO` `SRE fundamentals` `DevSecOps fundamentals`

---

## Education & Certifications

Diploma - Digital Business Technology  
Bangkok Technical Business Administration Vocational College | GPA: 3.36

Certifications:

- Google AI Essentials - Google
- Google Prompting Essentials - Google
- Python Programming - FutureSkill
- GitHub for Developers - BorntoDev
- Google UX Design - Google

---

## Contact

- Email: natthawat.derb@gmail.com
- Location: Chonburi, Thailand
- GitHub: [github.com/DerbSwag](https://github.com/DerbSwag)

Open to: System / Infrastructure Engineer roles, network/system implementation, junior Cloud/DevOps opportunities, and automation-focused IT operations.

Building infrastructure, automation, and realistic hands-on labs one practical step at a time.
