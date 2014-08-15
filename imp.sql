/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50128
Source Host           : localhost:3306
Source Database       : word

Target Server Type    : MYSQL
Target Server Version : 50128
File Encoding         : 65001

Date: 2013-08-25 15:04:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for imp
-- ----------------------------
DROP TABLE IF EXISTS `imp`;
CREATE TABLE `imp` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` text,
  `gro` int(1) DEFAULT NULL,
  `eng` text,
  `rec` text,
  `chi` text,
  `list` text,
  `ip` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=144 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imp
-- ----------------------------
INSERT INTO `imp` VALUES ('22', '2013/07/26 14:44:52', '2', 'forfeit', '/ˈfɔːfɪt/ /ˈfɔːrfət/', 'n.没收物；罚金；丧失', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('23', '2013/07/26 14:50:18', '2', 'indignity', '/ɪnˈdɪɡnəti/ /ɪnˈdɪɡnəti/', 'n.侮辱；轻蔑；有伤尊严', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('24', '2013/07/29 12:17:0', '2', 'homage', '/ˈhɒmɪdʒ/ /ˈhɑːmɪdʒ/', 'n.敬意；效忠', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('21', '2013/07/26 14:44:3', '1', 'fulminate', '/ˈfʊlmɪneɪt/ /ˈfʊlmɪneɪt/', 'v.大声呵斥；强烈谴责；使爆发', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('17', '2013/07/26 14:34:8', '1', 'indemnity', '/ɪnˈdemnəti/ /ɪnˈdemnəti/', 'n.保证；赔偿；保险', 'wordlisttoefl1', '127.0.0.1');
INSERT INTO `imp` VALUES ('18', '2013/07/26 14:40:44', '2', 'enervate', '/ˈenəveɪt/ /ˈenərveɪt/', 'adj.无力的；衰弱的', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('19', '2013/07/26 14:42:52', '2', 'incipient', '/ɪnˈsɪpiənt/ /ɪnˈsɪpiənt/', 'adj.起初的；初期的', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('20', '2013/07/26 14:43:39', '2', 'disparage', '/dɪˈspærɪdʒ/ /dɪˈspærɪdʒ/', 'vt.蔑视；贬损', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('25', '2013/07/29 18:53:23', '1', 'ingenuous', '/ɪnˈdʒenjuəs/ /ɪnˈdʒenjuəs/', 'adj.天真的；单纯的；率直的；坦白的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('26', '2013/07/26', '1', 'ingenious', '/ɪn\'dʒiːniəs/ /ɪn\'dʒiːniəs/', 'adj.机灵的；精制的；有独创性的', 'input', 'navicat');
INSERT INTO `imp` VALUES ('27', '2013/07/29 19:30:54', '2', 'defuse', '/ˌdiːˈfjuːz/ /ˌdiːˈfjuːz/', 'vt.拆除(炸弹等)的雷管；消除危险；缓和', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('28', '2013/07/29 19:32:9', '2', 'discourse', '/ˈdɪskɔːs/ /ˈdɪskɔːrs/', 'n.谈话，讨论；（一系列的）演讲，文章', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('29', '2013/08/02 12:36:29', '1', 'solicit', '/səˈlɪsɪt/ /səˈlɪsɪt/', 'vt.恳求；征求；勾引', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('30', '2013/08/02 12:37:24', '1', 'avid', '/ˈævɪd/ /ˈævɪd/', 'adj.渴望的；贪婪的；热心的', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('31', '2013/08/02 12:41:46', '2', 'connive', '/kəˈnaɪv/ /kəˈnaɪv/', 'v.共谋；默许；纵容', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('32', '2013/08/02 12:42:59', '1', 'obstinate', '/ˈɒbstɪnət/ /ˈɑːbstɪnət/', 'adj.固执的；倔强的；不易屈服的；（病）难治的', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('33', '2013/08/02 12:47:8', '2', 'abide', '/əˈbaɪd/ /əˈbaɪd/', 'v.忍受；遵守；坚持', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('34', '2013/08/02 12:50:18', '1', 'fluster', '/ˈflʌstə(r)/ /ˈflʌstər/', 'n.慌乱；狼狈；混乱', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('35', '2013/08/02 12:50:42', '1', 'redress', '/rɪˈdres/ /rɪˈdres/', 'n.赔偿；救济；矫正；缓解', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('36', '2013/08/02 12:52:9', '2', 'dissipate', '/ˈdɪsɪpeɪt/ /ˈdɪsɪpeɪt/', 'v.驱散；消散；散去；浪费；挥霍；放荡', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('89', '2013/08/08 17:8:59', '2', 'propagate', '/ˈprɒpəɡeɪt/ /ˈprɑːpəɡeɪt/', 'v.繁殖；增殖；传播；传送', 'wordlisttoefl1', '127.0.0.1');
INSERT INTO `imp` VALUES ('74', '2013/08/05 16:16:52', '1', 'gloat', '/ɡləʊt/ /ɡloʊt/', 'v.满足地看；沾沾自喜；幸灾乐祸', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('75', '2013/08/05 16:17:38', '1', 'wile', '/waɪl/ /waɪl/', 'n.诡计；阴谋；欺骗', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('76', '2013/08/05 16:17:51', '2', 'virtuous', '/ˈvɜːtʃuəs/ /ˈvɜːrtʃuəs/', 'adj.有品德的；有德行的；贞洁的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('90', '2013/08/08 17:10:59', '2', 'sermon', '/ˈsɜːmən/ /ˈsɜːrmən/', 'n.布道；说教', 'wordlisttoefl1', '127.0.0.1');
INSERT INTO `imp` VALUES ('91', '2013/08/11 10:44:19', '2', 'nudge', '/nʌdʒ/ /nʌdʒ/', 'vt.轻推；轻触；推进', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('92', '2013/08/11 10:46:43', '2', 'vintage', '/ˈvɪntɪdʒ/ /ˈvɪntɪdʒ/', 'n.收获；年代 ; adj.古典的；优质的 ; 佳酿的；', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('93', '2013/08/11 10:47:53', '2', 'referee', '/ˌrefəˈriː/ /ˌrefəˈriː/', 'n.裁判员；仲裁人；鉴定人；证明人', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('94', '2013/08/11 10:48:14', '1', 'funky', '/fʌŋki/ /fʌŋki/', 'adj.新式的；时髦的；<美俚>绝妙的，极好的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('95', '2013/08/11 10:48:31', '1', 'precarious', '/prɪˈkeəriəs/ /prɪˈkerəriəs/', 'adj.不稳定的；不安全的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('96', '2013/08/11 10:55:4', '2', 'stumble', '/ˈstʌmbl/ /ˈstʌmbl/', 'v.绊倒；蹒跚；犯错误；无意中发现', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('97', '2013/08/11 11:0:21', '1', 'conciliate', '/kənˈsɪlɪeɪt/ /kənˈsɪlɪˌeɪt/', 'vt.安抚；调和；取悦于', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('98', '2013/08/11 11:1:59', '2', 'tender', '/ˈtendə(r)/ /ˈtendər/', 'adj.温柔的；脆弱的；敏感的；亲切的；嫩的；痛的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('77', '2013/08/05 16:18:16', '2', 'trite', '/traɪt/ /traɪt/', 'adj.平庸的；陈腐的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('78', '2013/08/05 16:18:24', '1', 'prodigious', '/prəˈdɪdʒəs/ /prəˈdɪdʒəs/', 'adj.巨大的；惊人的；奇异的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('79', '2013/08/05 16:18:33', '1', 'negligent', '/ˈneɡlɪdʒənt/ /ˈneɡlɪdʒənt/', 'adj.疏忽的；粗心的；不在意的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('80', '2013/08/05 16:18:38', '2', 'peal', '/piːl/ /piːl/', 'n.钟声', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('81', '2013/08/05 16:18:47', '2', 'bogus', '/ˈbəʊɡəs/ /ˈboʊɡəs/', 'adj.假的；伪造的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('82', '2013/08/05 16:19:1', '1', 'ostensible', '/ɒˈstensəbl/ /ɑːˈstensəbl/', 'adj.表面的；假装的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('83', '2013/08/05 16:19:15', '2', 'haughty', '/ˈhɔːti/ /ˈhɔːti/', 'adj.傲慢的；自大的；骄傲的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('84', '2013/08/05 16:19:21', '1', 'inexorable', '/ɪnˈeksərəbl/ /ɪnˈeksərəbl/', 'adj.无情的；不可阻挡的；坚决不变的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('85', '2013/08/05 16:19:30', '2', 'onus', '/ˈəʊnəs/ /ˈoʊnəs/', 'n.负担；义务；耻辱', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('86', '2013/08/05 16:19:35', '1', 'notch', '/nɒtʃ/ /nɑːtʃ/', 'n.刻痕；等级；切口', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('87', '2013/08/05 16:19:44', '1', 'spurn', '/spɜːn/ /spɜːrn/', 'v.轻蔑地拒绝；摒弃', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('88', '2013/08/05 16:19:52', '1', 'dispense', '/dɪˈspens/ /dɪˈspens/', 'vt.分发；分配；免除；配(药)', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('99', '2013/08/11 11:3:38', '2', 'rapport', '/ræˈpɔː(r)/ /ræˈpɔːr/', 'n.关系；亲善；一致', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('100', '2013/08/11 11:5:51', '2', 'fester', '/ˈfestə(r)/ /ˈfestər/', 'v.溃烂；化脓；恶化', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('101', '2013/08/11 11:6:10', '2', 'affront', '/əˈfrʌnt/ /əˈfrʌnt/', 'n.侮辱', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('102', '2013/08/11 11:6:43', '1', 'pretentious', '/prɪˈtenʃəs/ /prɪˈtenʃəs/', 'adj.自命不凡的；自负的；矫饰的；炫耀的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('103', '2013/08/11 11:8:24', '1', 'embroil', '/ɪmˈbrɔɪl/ /ɪmˈbrɔɪl/', 'v.使卷入；使陷入；牵连', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('104', '2013/08/11 11:8:58', '2', 'allocate', '/ˈæləkeɪt/ /ˈæləkeɪt/', 'vt.分派；分配；分配额', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('105', '2013/08/12 15:36:25', '1', 'disciple', '/dɪˈsaɪpl/ /dɪˈsaɪpl/', 'n.弟子；门徒；信徒', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('106', '2013/08/12 15:53:44', '1', 'inference', '/ˈɪnfərəns/ /ˈɪnfərəns/', 'n.推理；推论；推断；结论', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('107', '2013/08/12 15:54:26', '1', 'disburse', '/dɪsˈbɜːs/ /dɪsˈbɜːrs/', 'v.支付；支出；分配', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('108', '2013/08/12 15:55:51', '1', 'dispersion', '/dɪˈspɜːʃn/ /dɪˈspɜːrʒn/', 'n.散布；分散；弥散；色散', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('109', '2013/08/12 15:56:57', '1', 'proscribe', '/prəˈskraɪb/ /proʊˈskraɪb/', 'v.禁止；放逐；排斥；剥夺…的公权', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('110', '2013/08/12 15:58:31', '1', 'plead', '/pliːd/ /pliːd/', 'v.辩护；恳求；提出借口；认罪', 'wordlisttoefl1', '192.168.0.101');
INSERT INTO `imp` VALUES ('111', '2013/08/12 21:14:24', '1', 'meander', '/miˈændə(r)/ /miˈændər/', 'v.缓慢而弯曲地流动；漫步；闲聊', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('112', '2013/08/12 21:14:26', '1', 'bidding', '/ˈbɪdɪŋ/ /ˈbɪdɪŋ/', 'n.邀请；命令；投标', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('113', '2013/08/12 21:14:28', '1', 'stoic', '/ˈstəʊɪkli/ /ˈstəʊɪkli/', 'adj.坚忍克己的；禁欲的', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('114', '2013/08/12 21:14:56', '1', 'corpulent', '/ˈkɔːpjələnt/ /ˈkɔːrpjələnt/', 'adj.肥胖的', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('115', '2013/08/12 21:15:45', '1', 'fatuous', '/ˈfætʃuəs/ /ˈfætʃuəs/', 'adj.愚昧的；发呆的；愚笨的', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('116', '2013/08/12 21:16:6', '1', 'provident', '/ˈprɒvɪdənt/ /ˈprɑːvɪdənt/', 'adj.有先见之明的；节俭的', 'wordlisttoefl2', '127.0.0.1');
INSERT INTO `imp` VALUES ('137', '2013/08/21 16:20:37', '1', 'improvident', '/ɪmˈprɒvɪdənt/ /ɪmˈprɑːvɪdənt/', 'adj.不顾将来的；无远见的；不节约的；不经济的', 'imp', '127.0.0.1');
INSERT INTO `imp` VALUES ('118', '2013/08/12 21:33:7', '1', 'equivocal', '/ɪˈkwɪvəkl/ /ɪˈkwɪvəkl/', 'adj.模棱两可的；意义不明确的', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('119', '2013/08/12 21:35:7', '1', 'lament', '/ləˈment/ /ləˈment/', 'n.悲叹；悼词', 'wordlisttoefl3', '127.0.0.1');
INSERT INTO `imp` VALUES ('136', '2013/08/21 16:19:43', '1', 'ostensible', '/ɒˈstensəbl/ /ɑːˈstensəbl/', 'adj.表面的；假装的', 'imp', '127.0.0.1');
INSERT INTO `imp` VALUES ('121', '2013/08/12 21:40:7', '1', 'flout', '/flaʊt/ /flaʊt/', 'v.藐视；轻视；嘲笑', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('122', '2013/08/12 21:41:36', '1', 'acrid', '/ˈækrɪd/ /ˈækrɪd/', 'adj.苦味的；辛辣的；尖刻的', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('123', '2013/08/12 21:42:0', '1', 'soothe', '/suːð/ /suːð/', 'v.缓和；使安静；安慰', 'wordlisttoefl4', '127.0.0.1');
INSERT INTO `imp` VALUES ('124', '2013/08/17 13:0:8', '1', 'bluff', 'blʌf', 'n.陡峭的悬崖, 绝壁', 'toefl', '127.0.0.1');
INSERT INTO `imp` VALUES ('138', '2013/08/23 14:55:31', '1', 'lash', '/læʃ/ /læʃ/', 'n.鞭子；鞭打；睫毛；讽刺', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('139', '2013/08/23 14:57:59', '1', 'stump', '/stʌmp/ /stʌmp/', 'v演说；受窘； n.残株；烟蒂；', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('140', '2013/08/23 15:1:9', '1', 'uncanny', '/ʌnˈkæni/ /ʌnˈkæni/', 'adj.神秘的；不可思议的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('141', '2013/08/23 15:1:15', '1', 'uncanny', '/ʌnˈkæni/ /ʌnˈkæni/', 'adj.神秘的；不可思议的', 'wordlist', '127.0.0.1');
INSERT INTO `imp` VALUES ('142', '2013/08/25 12:34:4', '1', 'swan song', 'swɔn sɔŋ', 'n. 最后作品，天鹅临死时的叫声', 'test', '127.0.0.1');
INSERT INTO `imp` VALUES ('143', '2013/08/25 12:35:51', '1', 'swan song', 'swɔn sɔŋ', 'n. 最后作品，天鹅临死时的叫声', 'test', '127.0.0.1');
