# Pelvicare - Complete Routes & URLs Reference

## 🔗 Public Routes (No Authentication Required)

| URL | Description | Route Name |
|-----|-------------|------------|
| `/` | Home Page | `home` |
| `/services` | Services Page | `services` |
| `/treatments` | Treatments Page | `treatments` |
| `/about` | About Page | `about` |
| `/contact` | Contact Page | `contact` |
| `/book-appointment` | Public Appointment Booking | `book-appointment` |
| `/login` | Login Page | `login` |
| `/register` | Registration Page (Patient/Doctor) | `register` |
| `/register-physiotherapist` | Redirects to Doctor Registration | `register-physiotherapist` |

---

## 👨‍⚕️ Doctor Registration (Multi-Step Process)

| Step | URL | Description | Authentication |
|------|-----|-------------|----------------|
| Step 1 | `/doctor/register/step1` | Basic Information | Guest |
| Step 2 | `/doctor/register/step2` | Upload Documents | Required |
| Step 3 | `/doctor/register/step3` | Build Profile | Required |
| Step 4 | `/doctor/register/step4` | Fees & Availability | Required |
| Complete | `/doctor/register/complete` | Registration Complete | Required |

---

## 👤 Patient Dashboard Routes

| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/patient/dashboard` | Patient Dashboard | `patient.dashboard` |
| `/admin/patient/profile` | My Profile (Medical History) | `patient.profile` |
| `/admin/patient/appointments` | My Appointments List | `patient.appointments` |
| `/admin/patient/appointments/book` | Book New Appointment | `patient.appointments.book` |
| `/admin/patient/appointments/{id}/rebook` | Rebook Appointment | `patient.appointments.rebook` |
| `/admin/patient/reports` | My Reports List | `patient.reports` |
| `/admin/patient/reports/{id}` | View Report Details | `patient.reports.view` |

---

## 🩺 Doctor Dashboard Routes

| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/doctor/dashboard` | Doctor Dashboard | `doctor.dashboard` |
| `/admin/doctor/appointments` | Manage Appointments | `doctor.appointments` |
| `/admin/doctor/availability` | Set Availability Schedule | `doctor.availability` |

---

## 🔐 Super Admin Dashboard Routes

### Main Dashboard
| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin` | Main Admin (Redirects by role) | `admin.dashboard` |
| `/admin/super-admin/dashboard` | Super Admin Dashboard | `super-admin.dashboard` |

### User Management
| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/super-admin/users` | Manage All Users | `super-admin.users` |
| `/admin/super-admin/users/{id}/role` | Update User Role (POST) | `super-admin.users.update-role` |

### Doctor Verification
| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/super-admin/doctor-verification` | Doctor Verification List | `super-admin.doctor-verification` |
| `/admin/super-admin/doctor-verification/{id}` | Doctor Details & Review | `super-admin.doctor-verification.show` |
| `/admin/super-admin/doctor-verification/{id}/approve` | Approve Doctor (POST) | `super-admin.doctor-verification.approve` |
| `/admin/super-admin/doctor-verification/{id}/reject` | Reject Doctor (POST) | `super-admin.doctor-verification.reject` |
| `/admin/super-admin/doctor-verification/document/{id}/approve` | Approve Document (POST) | `super-admin.doctor-verification.document.approve` |
| `/admin/super-admin/doctor-verification/document/{id}/reject` | Reject Document (POST) | `super-admin.doctor-verification.document.reject` |

### Content Management
| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/content` | Content List | `admin.content.index` |
| `/admin/content/create` | Create Content | `admin.content.create` |
| `/admin/content/{id}/edit` | Edit Content | `admin.content.edit` |

### Blog Management
| URL | Description | Route Name |
|-----|-------------|------------|
| `/admin/blog` | Blog Posts List | `admin.blog.index` |
| `/admin/blog/create` | Create Blog Post | `admin.blog.create` |
| `/admin/blog/{id}` | View Blog Post | `admin.blog.show` |
| `/admin/blog/{id}/edit` | Edit Blog Post | `admin.blog.edit` |

---

## 🔑 Authentication Routes

| URL | Method | Description | Route Name |
|-----|--------|-------------|------------|
| `/login` | GET | Show Login Form | `login` |
| `/login` | POST | Process Login | - |
| `/logout` | POST | Logout User | `logout` |
| `/register` | GET | Show Registration Form | `register` |
| `/register` | POST | Process Registration | - |

---

## 📋 Quick Access Guide

### For Testing

**Super Admin Login:**
- URL: `/login`
- Email: `admin@pelvicare.com`
- Password: `admin123`
- Dashboard: `/admin/super-admin/dashboard`

**Register as Doctor:**
1. Go to `/register`
2. Select "Doctor/Physiotherapist"
3. Complete 4-step registration
4. Wait for admin verification

**Register as Patient:**
1. Go to `/register`
2. Select "Patient"
3. Access dashboard: `/admin/patient/dashboard`

---

## 🎨 Dashboard Features by Role

### Patient Dashboard Features:
- ✅ View appointment statistics
- ✅ Book new appointments (Home/Clinic/Video)
- ✅ View upcoming appointments
- ✅ Rebook appointments
- ✅ Manage medical history
- ✅ Upload medical documents (MRI, X-Ray, etc.)
- ✅ View medical reports

### Doctor Dashboard Features:
- ✅ View appointment statistics
- ✅ Manage all appointments
- ✅ Update appointment status
- ✅ Add doctor notes
- ✅ Set weekly availability schedule
- ✅ Configure session fees

### Super Admin Dashboard Features:
- ✅ System-wide statistics
- ✅ User management
- ✅ Doctor verification workflow
- ✅ Content management (Pages, Sections, Blog)
- ✅ Blog post management
- ✅ View all appointments

---

## 🔒 Access Control

- **Public Routes**: Accessible to everyone
- **Patient Routes**: Requires `patient` role
- **Doctor Routes**: Requires `admin` role (doctors are stored as 'admin' role)
- **Super Admin Routes**: Requires `super_admin` role

All admin routes are protected with authentication middleware and role-based access control.

