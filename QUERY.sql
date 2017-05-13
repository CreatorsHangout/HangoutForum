/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
/**
 * Author:  RTG
 * Created: May 13, 2017
 */

CREATE TABLE accounts (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    uid varchar(128) not null,
    pwd varchar(128) not null
)

/**
`* Run this after that
*/

INSERT INTO accounts (uid, pwd) VALUES ('admin', 'admin123')

/**
 * You can now login with the username 'admin' and password 'admin123'
*/