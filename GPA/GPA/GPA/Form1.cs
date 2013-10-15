using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace GPA
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void timer1_Tick(object sender, EventArgs e)
        {
            int d;

            for (d = 0; d <= 100; d++)
                progressBar1.Value = d;

            this.Visible = false;
            Form2 g = new Form2();
            g.Show();

            timer1.Enabled = false;
        }
    }
}
