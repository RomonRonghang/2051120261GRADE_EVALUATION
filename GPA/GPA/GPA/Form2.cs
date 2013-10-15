using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.OleDb;

namespace GPA
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Application.Exit();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string constr = "Provider=Microsoft.Jet.OLEDB.4.0;Data Source=G:\GPA\GPA\\GPA.mdb;";
            Con = new OleDbConnection(@constr);
            Con.Open();

            Com = new OleDbCommand();
            Com.
        }
    }
}
