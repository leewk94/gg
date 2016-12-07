<h1>Add - Student Profile</h1>

<form action="<?php echo URL;?>Admin_StudProfile/create" method="POST">
    <table>
        <thead>
            <tr>
                <th colspan="3">
                    Add new student
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:right">Name</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <input type="text" name="name" id="name" size="100"/>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Identity Card Number</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <input type="text" name="IC" id="IC" size="45" pattern="[0-9]{12}" title="Twelve numeric. e.g.901121075001"/>
                    <span style="color: gray;font-style: italic;font-size:10px">e.g.901121075001</span>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Date of Birth</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <input type="date" name="DOB" id="DOB" size="45"/>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Email</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <input type="email" name="email" id="email" size="45"/>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Contact Number</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <input type="tel" name="contact" id="contact" size="45" pattern="[0-9]{10,12}" title="Invalid contact number format. e.g.60126551212"/>
                    <span style="color: gray;font-style: italic;font-size:10px">Valid Format: e.g.0126551212/60126551212</span>
                </td>
            </tr>
            <tr>
                <td style="text-align:right">Address</td>
                <td style="text-align:right">:</td>
                <td style="text-align:left">
                    <textarea name="address" rows="3" cols="40"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                </td>
                <td>
                    <input type="submit" name="submit" id="submit" value="Add"/>
                </td>
            </tr>
        </tbody>
        
    </table>

</form>
<a href="<?php echo URL; ?>Admin_StudProfile"><input type="button" value="Back"></a>