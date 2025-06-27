
export function useAppMenus() {
    return {
        
	navbarTopRight: [],
	navbarSideLeft: [
  {
    "to": "/home",
    "label": "Home",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/appointments",
    "label": "Appointments",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/payments",
    "label": "Payments",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/permissions",
    "label": "Permissions",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/products",
    "label": "Products",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/roles",
    "label": "Roles",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/services",
    "label": "Services",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/staff",
    "label": "Staff",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/treatmentrecords",
    "label": "Treatment Records",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  },
  {
    "to": "/user",
    "label": "User",
    "icon": "pi pi-th-large",
    "iconcolor": "",
    "target": "",
    
  }
],
	status: [    
{value: "pending", label: "pending"},
	{value: "completed", label: "completed"},
	{value: "cancelled", label: "cancelled"}
    ],
	gender: [    
{value: "M", label: "M"},
	{value: "F", label: "F"}
    ],
	status2: [    
{value: "paid", label: "paid"},
	{value: "unpaid", label: "unpaid"},
	{value: "refunded", label: "refunded"}
    ],
        exportFormats: {
            print: {
                label: 'Print',
                icon: 'pi pi-print',
                type: 'print',
                ext: 'print',
            },
            pdf: {
                label: 'Pdf',

                icon: 'pi pi-file-pdf',
                type: 'pdf',
                ext: 'pdf',
            },
            excel: {
                label: 'Excel',
                icon: 'pi pi-file-excel',
                type: 'excel',
                ext: 'xlsx',
            },
            csv: {
                label: 'Csv',
                icon: 'pi pi-table',
                type: 'csv',
                ext: 'csv',
            },
        },
        
    }
}
